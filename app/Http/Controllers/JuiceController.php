<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JuiceController extends Controller
{
    /**
     * Show the landing page.
     */
    public function index()
    {
        $flavors = [
            [
                'id' => 'orange',
                'name' => 'Laranja Dourada (Golden Citrus)',
                'tag' => 'Citrus Burst',
                'tag_class' => 'tag-citrus',
                'accent_color' => '#ff6b00',
                'ingredients' => 'Valencia Oranges, Mandarin & Tangerine zest',
                'desc' => 'Sweet, bright, and intensely invigorating. 100% freshly squeezed straight from sunny orchards.',
                'meta' => '100% Pure Squeezed',
                'image' => 'https://images.unsplash.com/photo-1613478223719-2ab802602423?auto=format&fit=crop&w=600&q=80',
            ],
            [
                'id' => 'mango',
                'name' => 'Manga Tropical & Maracujá',
                'tag' => 'Tropical Punch',
                'tag_class' => 'tag-tropical',
                'accent_color' => '#ff9100',
                'ingredients' => 'Ripe Mango, Passionfruit & Golden Pineapple',
                'desc' => 'A rich, velvety tropical nectar blending sweet mango with the tangy punch of real passionfruit.',
                'meta' => 'Velvety & Fragrant',
                'image' => 'https://images.unsplash.com/photo-1553530666-ba11a7da3888?auto=format&fit=crop&w=600&q=80',
            ],
            [
                'id' => 'berry',
                'name' => 'Frutas Vermelhas (Berry Explosion)',
                'tag' => 'Super Berry',
                'tag_class' => 'tag-berry',
                'accent_color' => '#e91e63',
                'ingredients' => 'Wild Strawberries, Blackberries, Raspberries & Apple',
                'desc' => 'Antioxidant powerhouse delivering a vibrant, crisp, and deeply refreshing berry rush.',
                'meta' => 'High Antioxidant',
                'image' => 'https://images.unsplash.com/photo-1546173159-315724a31696?auto=format&fit=crop&w=600&q=80',
            ],
            [
                'id' => 'green',
                'name' => 'Verde Fresco (Vitality Glow)',
                'tag' => 'Detox Energy',
                'tag_class' => 'tag-green',
                'accent_color' => '#00c853',
                'ingredients' => 'Crisp Green Apple, Cucumber, Kale, Lemon & Ginger Root',
                'desc' => 'Invigorating and light with a spicy ginger kick, formulated for clean energy and everyday radiance.',
                'meta' => 'Alkalizing Blend',
                'image' => 'https://images.unsplash.com/photo-1540420773420-3366772f4999?auto=format&fit=crop&w=600&q=80',
            ],
            [
                'id' => 'pineapple',
                'name' => 'Abacaxi & Hortelã (Pineapple Breeze)',
                'tag' => 'Ultra Cool',
                'tag_class' => 'tag-refresh',
                'accent_color' => '#00b0ff',
                'ingredients' => 'Sweet Pineapple, Crushed Garden Mint & Fresh Lime',
                'desc' => 'The ultimate thirst quencher. Sweet aromatic pineapple balanced with fresh crushed cooling mint.',
                'meta' => 'Crisp & Uplifting',
                'image' => 'https://images.unsplash.com/photo-1600271886742-f049cd451bba?auto=format&fit=crop&w=600&q=80',
            ],
            [
                'id' => 'watermelon',
                'name' => 'Melancia & Goiaba Rosa',
                'tag' => 'Summer Splash',
                'tag_class' => 'tag-summer',
                'accent_color' => '#ff3d00',
                'ingredients' => 'Cold-pressed Watermelon, Pink Guava & Lime Drop',
                'desc' => 'Hydrating and delicately floral, capturing the vibrant essence of summer in every single drop.',
                'meta' => 'Deep Hydration',
                'image' => 'https://images.unsplash.com/photo-1589733955941-5eeaf752f6dd?auto=format&fit=crop&w=600&q=80',
            ],
        ];

        $fruits = [
            [
                'name' => 'Sun-Ripened Citrus',
                'desc' => 'Sweet Valencia & Bahia Oranges',
                'image' => 'https://images.unsplash.com/photo-1610832958506-aa56368176cf?auto=format&fit=crop&w=600&q=80',
            ],
            [
                'name' => 'Ruby Red Berries',
                'desc' => 'Wild Strawberries & Raspberries',
                'image' => 'https://images.unsplash.com/photo-1464965911861-746a04b4bca6?auto=format&fit=crop&w=600&q=80',
            ],
            [
                'name' => 'Tropical Orchards',
                'desc' => 'Golden Pineapples & Passionfruit',
                'image' => 'https://images.unsplash.com/photo-1550258987-190a2d41a8ba?auto=format&fit=crop&w=600&q=80',
            ],
            [
                'name' => 'Crisp Summer Melons',
                'desc' => 'Sweet Watermelon & Pink Guava',
                'image' => 'https://images.unsplash.com/photo-1595855759920-86582396756a?auto=format&fit=crop&w=600&q=80',
            ],
        ];

        $events = [
            [
                'title' => 'Pop-Up Juice Bars & Festivals',
                'badge' => 'Live Juice Bar',
                'date_info' => 'Weekend Markets & Festivals',
                'date_icon' => 'calendar',
                'desc' => 'Our vibrant mobile juice bar serves ice-cold natural bottles and fresh on-demand cold-pressing.',
                'image' => 'https://images.unsplash.com/photo-1511578314322-379afb476865?auto=format&fit=crop&w=600&q=80',
            ],
            [
                'title' => 'Flavor Tastings & Mixology Workshops',
                'badge' => 'Interactive Tasting',
                'date_info' => 'Hospitality & Wellness Groups',
                'date_icon' => 'users',
                'desc' => 'Guided juice sampling sessions exploring natural flavor profiles, vitamin combinations, and culinary pairings.',
                'image' => 'https://images.unsplash.com/photo-1528605248644-14dd04022da1?auto=format&fit=crop&w=600&q=80',
            ],
            [
                'title' => 'Event Catering & Bulk Juice Dispensers',
                'badge' => 'Catering & Events',
                'date_info' => 'Corporate & Private Parties',
                'date_icon' => 'briefcase',
                'desc' => 'Chilled juice stations and bulk bottles for company events, weddings, athlete breakfasts, and celebrations.',
                'image' => 'https://images.unsplash.com/photo-1519671482749-fd09be7ccebf?auto=format&fit=crop&w=600&q=80',
            ],
        ];

        return view('landing', compact('flavors', 'fruits', 'events'));
    }

    /**
     * Handle wholesale / contact inquiries.
     */
    public function submitInquiry(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:50',
            'inquiryType' => 'required|string',
            'message' => 'required|string|max:2000',
        ]);

        return redirect()->to(url()->previous() . '#contact')
            ->with('success', 'Obrigado, ' . $validated['name'] . '! A sua mensagem foi enviada. A nossa equipa entrará em contacto dentro de 24 horas.');
    }
}
