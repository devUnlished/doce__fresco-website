#!/bin/bash
set -euo pipefail

cd "$(dirname "$0")/.."

DOMAIN="docefresco.primestackdigital.com"
ENDPOINT="https://$DOMAIN"

echo "=================================================="
echo "Running Health, SSL & Integration Tests for Doce Fresco"
echo "=================================================="

# Check Docker Compose config
docker compose config > /dev/null
echo "✓ docker-compose.yml configuration valid."

# If container is running, execute HTTP & HTTPS verification
if docker ps --format '{{.Names}}' | grep -q "^docefresco-app$"; then
    echo "✓ Container docefresco-app is running."

    # Direct container health check
    HTTP_CODE=$(docker exec docefresco-app curl -s -o /dev/null -w "%{http_code}" http://127.0.0.1/ || true)
    if [ "$HTTP_CODE" = "200" ]; then
        echo "✓ HTTP GET / on internal container returned HTTP 200 OK."
    else
        echo "✗ HTTP GET / returned: $HTTP_CODE"
        exit 1
    fi

    # Test HTTP -> HTTPS redirect via Gateway proxy
    GW_HTTP_CODE=$(curl -s -o /dev/null -w "%{http_code}" -H "Host: $DOMAIN" http://127.0.0.1/ || true)
    GW_REDIRECT=$(curl -s -I -H "Host: $DOMAIN" http://127.0.0.1/ | grep -i "^location:" | tr -d '\r\n' || true)
    if [ "$GW_HTTP_CODE" = "301" ] && [[ "$GW_REDIRECT" == *"$ENDPOINT/"* ]]; then
        echo "✓ Gateway proxy enforces HTTP -> HTTPS 301 redirect ($GW_REDIRECT)."
    else
        echo "✗ Gateway HTTP redirect failed (code: $GW_HTTP_CODE, location: $GW_REDIRECT)"
        exit 1
    fi

    # Test HTTPS SSL termination via Gateway proxy
    SSL_CODE=$(curl -s -o /dev/null -w "%{http_code}" "$ENDPOINT/" || true)
    if [ "$SSL_CODE" = "200" ]; then
        echo "✓ Gateway HTTPS TLS verification returned HTTP 200 OK."
    else
        echo "✗ Gateway HTTPS failed (code: $SSL_CODE)"
        exit 1
    fi

    # Run Python end-to-end form and CSRF test over HTTPS
    python3 scripts/test_inquiry.py
else
    echo "Container docefresco-app is not currently running."
    exit 1
fi

echo "=================================================="
echo "All tests completed successfully!"
echo "=================================================="
