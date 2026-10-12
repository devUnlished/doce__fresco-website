#!/bin/bash
set -euo pipefail

echo "=================================================="
echo "Running Health & Integration Tests for Doce Fresco"
echo "=================================================="

# Check Docker Compose config
docker compose config > /dev/null
echo "✓ docker-compose.yml configuration valid."

# If container is running, execute HTTP verification
if docker ps --format '{{.Names}}' | grep -q "^docefresco-app$"; then
    echo "✓ Container docefresco-app is running."

    # Direct container health check
    HTTP_CODE=$(docker exec docefresco-app curl -s -o /dev/null -w "%{http_code}" http://127.0.0.1/ || true)
    if [ "$HTTP_CODE" = "200" ]; then
        echo "✓ HTTP GET / on container returned HTTP 200 OK."
    else
        echo "✗ HTTP GET / returned: $HTTP_CODE"
        exit 1
    fi

    # Test via Gateway proxy
    GW_CODE=$(curl -s -o /dev/null -w "%{http_code}" -H "Host: docefresco.primestackdigital.com" http://127.0.0.1/ || true)
    if [ "$GW_CODE" = "200" ]; then
        echo "✓ Gateway proxy to docefresco-app returned HTTP 200 OK."
    else
        echo "✗ Gateway proxy returned: $GW_CODE"
        exit 1
    fi

    # Run Python end-to-end form and CSRF test
    python3 scripts/test_inquiry.py
else
    echo "Container docefresco-app is not currently running."
    exit 1
fi

echo "=================================================="
echo "All tests completed successfully!"
echo "=================================================="
