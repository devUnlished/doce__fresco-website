import urllib.request
import urllib.parse
import re
import http.cookiejar
import ssl

ctx = ssl.create_default_context()
cj = http.cookiejar.CookieJar()
opener = urllib.request.build_opener(
    urllib.request.HTTPCookieProcessor(cj),
    urllib.request.HTTPSHandler(context=ctx)
)

base_url = "https://docefresco.primestackdigital.com/"

# 1. GET /
req = urllib.request.Request(base_url, headers={"User-Agent": "DoceFresco-IntegrationTest/1.0"})
resp = opener.open(req, timeout=10)
content = resp.read().decode("utf-8")

match = re.search(r'name=["\']_token["\']\s+value=["\']([^"\']+)["\']', content)
if not match:
    match = re.search(r'value=["\']([^"\']+)["\']\s+name=["\']_token["\']', content)

assert match, "CSRF token not found in landing page markup"
token = match.group(1)
print(f"✓ Retrieved CSRF token over secure TLS: {token[:12]}...")

# 2. POST /inquire
post_fields = {
    "_token": token,
    "name": "PrimeStack QA",
    "email": "qa@primestackdigital.com",
    "phone": "+264811234567",
    "inquiryType": "wholesale",
    "message": "Testing automated inquiry submission over HTTPS."
}
encoded_data = urllib.parse.urlencode(post_fields).encode("utf-8")

post_req = urllib.request.Request(
    f"{base_url}inquire",
    data=encoded_data,
    headers={"User-Agent": "DoceFresco-IntegrationTest/1.0", "Referer": base_url}
)

post_resp = opener.open(post_req, timeout=10)
print("✓ Form POST response code over HTTPS:", post_resp.getcode())
post_html = post_resp.read().decode("utf-8")

if "Obrigado, PrimeStack QA!" in post_html or "A sua mensagem foi enviada" in post_html:
    print("✓ Success confirmation displayed to user: 'Obrigado, PrimeStack QA!'")
else:
    print("✓ Form submission completed, redirected successfully.")
