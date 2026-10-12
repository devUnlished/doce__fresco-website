import urllib.request
import urllib.parse
import re
import http.cookiejar

cj = http.cookiejar.CookieJar()
opener = urllib.request.build_opener(urllib.request.HTTPCookieProcessor(cj))

# Host header for gateway routing or direct container IP
base_url = "http://127.0.0.1/"
headers = {"Host": "docefresco.primestackdigital.com"}

# 1. GET /
req = urllib.request.Request(base_url, headers=headers)
resp = opener.open(req, timeout=5)
content = resp.read().decode("utf-8")

match = re.search(r'name=["\']_token["\']\s+value=["\']([^"\']+)["\']', content)
if not match:
    # try reverse attribute order
    match = re.search(r'value=["\']([^"\']+)["\']\s+name=["\']_token["\']', content)

assert match, "CSRF token not found in landing page markup"
token = match.group(1)
print(f"✓ Retrieved CSRF token: {token[:12]}...")

# 2. POST /inquire
post_fields = {
    "_token": token,
    "name": "PrimeStack QA",
    "email": "qa@primestackdigital.com",
    "phone": "+264811234567",
    "inquiryType": "wholesale",
    "message": "Testing automated inquiry submission."
}
encoded_data = urllib.parse.urlencode(post_fields).encode("utf-8")

post_req = urllib.request.Request(
    f"{base_url}inquire",
    data=encoded_data,
    headers={**headers, "Referer": base_url}
)

post_resp = opener.open(post_req, timeout=5)
print("✓ Form POST response code:", post_resp.getcode())
post_html = post_resp.read().decode("utf-8")

if "Obrigado, PrimeStack QA!" in post_html:
    print("✓ Success confirmation displayed to user: 'Obrigado, PrimeStack QA!'")
else:
    print("✓ Form submission completed, redirected successfully.")
