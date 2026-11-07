#!/usr/bin/env python3
"""
Doce & Fresco - Hero Section Only Verification Suite
Verifies:
1. Live HTTPS HTTP 200 OK
2. Navbar is completely removed
3. Top announcement bar is completely removed
4. Only the home page hero section exists (no about, flavors, sourcing, events, contact form, footer)
5. Hero section background image 'Doce&fresc_hero section.jpeg' returns HTTP 200
6. Only 'Doce&fresc_hero section.jpeg' remains in public/images
7. Only 'landing.blade.php' remains in resources/views
8. Interactive CTA buttons (mailto and tel) are present and functional
"""

import os
import re
import ssl
import sys
import urllib.request

DOMAIN = "docefresco.primestackdigital.com"
BASE_URL = f"https://{DOMAIN}/"
PROJECT_DIR = "/root/Projects/docefresco"
IMAGES_DIR = os.path.join(PROJECT_DIR, "public", "images")
VIEWS_DIR = os.path.join(PROJECT_DIR, "resources", "views")

passed = 0
total = 0

def test(name, condition, details=""):
    global passed, total
    total += 1
    if condition:
        print(f"  [PASS] {name}")
        passed += 1
    else:
        print(f"  [FAIL] {name} {details}")

print("=======================================================")
print("Running Doce & Fresco Hero Section Verification Suite")
print("=======================================================")

ctx = ssl.create_default_context()
ctx.check_hostname = False
ctx.verify_mode = ssl.CERT_NONE

# 1. Fetch live page HTML
try:
    req = urllib.request.Request(BASE_URL, headers={"User-Agent": "Mozilla/5.0 (IntegrationTest/1.0)"})
    with urllib.request.urlopen(req, context=ctx, timeout=10) as resp:
        status_code = resp.getcode()
        html = resp.read().decode("utf-8")
except Exception as e:
    print(f"  [FAIL] Failed to fetch {BASE_URL}: {e}")
    sys.exit(1)

test("GET / returns HTTP 200 OK", status_code == 200)

# 2. Verify Navbar is completely removed
test("Navbar is removed from page", "navbar" not in html and "<nav" not in html)

# 3. Verify Top announcement bar is removed
test("Top announcement bar is removed from page", "top-bar" not in html)

# 4. Verify all other sections are removed
test("Pillars (#about) section removed", 'id="about"' not in html and "pillars-section" not in html)
test("Flavors (#flavors) section removed", 'id="flavors"' not in html and "flavors-section" not in html)
test("Sourcing (#sourcing) section removed", 'id="sourcing"' not in html and "sourcing-section" not in html)
test("Events (#events) section removed", 'id="events"' not in html and "events-section" not in html)
test("Contact (#contact) section removed", 'id="contact"' not in html and "contact-section" not in html)
test("Footer is removed", "<footer" not in html and "footer-content" not in html)

# 5. Verify Hero Section is present and properly constructed
test("Hero section (#home) is present", 'id="home"' in html and "hero-section" in html)
test("Hero brand title contains Doce & Fresco", "Doce" in html and "Fresco" in html and "highlight-red" in html)
test("Hero subtitle is present", "From sun-drenched orchards directly to your glass" in html)
test("Hero features list is present", "Cold-Pressed & Flash Chilled Daily" in html)
test("Interactive CTA buttons present (mailto & tel)", 'href="mailto:contato@doceefresco.com"' in html and 'href="tel:+351210987654"' in html)
test("Hero stats row present", "100%" in html and "12+" in html and "50k+" in html)

# 6. Verify Background Image HTTP reachability
hero_img_url = f"{BASE_URL}images/Doce&fresc_hero%20section.jpeg"
try:
    img_req = urllib.request.Request(hero_img_url, headers={"User-Agent": "Mozilla/5.0"})
    with urllib.request.urlopen(img_req, context=ctx, timeout=10) as img_resp:
        img_status = img_resp.getcode()
        img_type = img_resp.headers.get("Content-Type", "")
        img_len = int(img_resp.headers.get("Content-Length", 0))
    test("Hero background image returns HTTP 200", img_status == 200 and "image/jpeg" in img_type and img_len > 1000000)
except Exception as e:
    test("Hero background image returns HTTP 200", False, f"- Error: {e}")

# 7. Verify file system: Only 'Doce&fresc_hero section.jpeg' in public/images
remaining_images = os.listdir(IMAGES_DIR)
test(
    "Only 'Doce&fresc_hero section.jpeg' remains in public/images",
    remaining_images == ["Doce&fresc_hero section.jpeg"],
    f"- Found: {remaining_images}"
)

# 8. Verify file system: Only 'landing.blade.php' remains in resources/views
remaining_views = os.listdir(VIEWS_DIR)
test(
    "Only 'landing.blade.php' remains in resources/views",
    remaining_views == ["landing.blade.php"],
    f"- Found: {remaining_views}"
)

print("=======================================================")
print(f"Results: {passed}/{total} Passed ({passed/total*100:.1f}%)")
print("=======================================================")

if passed == total:
    print("All tests passed successfully!")
    sys.exit(0)
else:
    print(f"Tests failed: {total - passed} failures")
    sys.exit(1)
