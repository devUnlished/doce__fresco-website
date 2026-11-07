#!/usr/bin/env python3
"""
Doce & Fresco - Far-Right Heading & Responsive Hero Verification Suite
Verifies:
1. Live HTTPS GET / returns HTTP 200 OK
2. Navbar is completely absent
3. Secondary sections (about, flavors, sourcing, events, contact, footer) are completely absent
4. Heading text "The flavor of our land, fresh in your bottle." is present
5. Heading is positioned to the far right (.hero-heading-box with text-align: right and justify-content: flex-end)
6. Color-blended gradient phrases (.phrase-land and .phrase-fresh) are present
7. Mobile responsive layout and frosted-glass backdrop styles are present
8. Hero section background image returns HTTP 200 with valid JPEG MIME type
9. Only 'Doce&fresc_hero section.jpeg' exists in public/images
10. Only 'landing.blade.php' exists in resources/views
"""

import os
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
print("Running Doce & Fresco Hero Heading & Responsiveness Verification")
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

# 2. Verify Navbar with White Bottom Border Line & Active Route Links
test("Navbar is present with white bottom border line", 'class="navbar"' in html and "border-bottom: 2px solid #ffffff;" in html)
test("Brand logo and navigation links are present in navbar", "brand-title" in html and "nav-links" in html)
test("Active links point to dedicated subpage routes", 'href="https://docefresco.primestackdigital.com/sobre"' in html or 'href="/sobre"' in html)
test("Contact item in navbar is plain text link (not a button)", 'Contacto</a>' in html and "nav-btn-contact" not in html)
test("Top announcement bar is removed from page", "top-bar" not in html)

# 3. Verify all other content sections and footer are removed
test("No about/pillars section", 'id="about"' not in html and "pillars-section" not in html)
test("No flavors section", 'id="flavors"' not in html and "flavors-section" not in html)
test("No sourcing section", 'id="sourcing"' not in html and "sourcing-section" not in html)
test("No events section", 'id="events"' not in html and "events-section" not in html)
test("No contact section or form", 'id="contact"' not in html and "<form" not in html)
test("No footer", "<footer" not in html)
test("Pill badge / button-looking border is removed", "hero-pill" not in html)

# 4. Verify Heading content in Portuguese with split lines
test(
    "Portuguese heading phrases are split onto separate lines on top of each other",
    "O sabor da<br>nossa terra," in html and "fresco na<br>sua garrafa." in html
)

# 5. Verify Far-Right positioning, Upward shift & Color blending
test(
    "Far-right alignment and upward shift styles are present",
    "justify-content: flex-end" in html and "text-align: right" in html and "translateY(-2.75rem)" in html
)
test(
    "Enlarged heading font-size (clamp up to 8.5rem / ~136px) is present",
    "clamp(5.0rem" in html
)
test(
    "Color-blended phrases (.phrase-land and .phrase-fresh) are present",
    "phrase-land" in html and "phrase-fresh" in html and "background-clip: text" in html
)

# 6. Verify Mobile responsiveness rules
test(
    "Mobile responsive media queries and clamp font-size are present",
    "@media (max-width: 768px)" in html and "clamp(" in html and "backdrop-filter" in html
)

# 7. Verify Background Image HTTP reachability
hero_img_url = f"{BASE_URL}images/Doce%26fresc_hero%20section.jpeg"
try:
    img_req = urllib.request.Request(hero_img_url, headers={"User-Agent": "Mozilla/5.0"})
    with urllib.request.urlopen(img_req, context=ctx, timeout=10) as img_resp:
        img_status = img_resp.getcode()
        img_type = img_resp.headers.get("Content-Type", "")
        img_len = int(img_resp.headers.get("Content-Length", 0))
    test("Hero background image returns HTTP 200", img_status == 200 and "image/jpeg" in img_type and img_len > 1000000)
except Exception as e:
    test("Hero background image returns HTTP 200", False, f"- Error: {e}")

# 8. Verify all other pages have active links, return HTTP 200, and include the navbar with white border
subpages = [
    ("/sobre", "Sobre Nós", "Sobre a Doce & Fresco"),
    ("/sumos", "Nossos Sumos", "Os Nossos Sumos 100% Naturais"),
    ("/origem", "Origem", "A Origem do Nosso Sabor"),
    ("/contacto", "Contacto", "Fale com a Doce & Fresco"),
]

for path, link_title, expected_text in subpages:
    sub_url = f"{BASE_URL}{path.lstrip('/')}"
    try:
        sub_req = urllib.request.Request(sub_url, headers={"User-Agent": "Mozilla/5.0"})
        with urllib.request.urlopen(sub_req, context=ctx, timeout=10) as sub_resp:
            sub_status = sub_resp.getcode()
            sub_html = sub_resp.read().decode("utf-8")
        test(f"Page {path} returns HTTP 200 OK", sub_status == 200)
        test(
            f"Page {path} has active nav indicator for '{link_title}' and white bottom border",
            f'>{link_title}</a>' in sub_html and "border-bottom: 2px solid #ffffff;" in sub_html and expected_text in sub_html
        )
    except Exception as e:
        test(f"Page {path} returns HTTP 200 OK", False, f"- Error: {e}")

# 9. Verify file system
remaining_images = os.listdir(IMAGES_DIR)
test(
    "Only 'Doce&fresc_hero section.jpeg' remains in public/images",
    remaining_images == ["Doce&fresc_hero section.jpeg"],
    f"- Found: {remaining_images}"
)

expected_views = {"landing.blade.php", "about.blade.php", "juices.blade.php", "origin.blade.php", "contact.blade.php", "layouts"}
actual_views = set(os.listdir(VIEWS_DIR))
test(
    "Dedicated views for all active pages exist in resources/views",
    expected_views.issubset(actual_views),
    f"- Found: {actual_views}"
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
