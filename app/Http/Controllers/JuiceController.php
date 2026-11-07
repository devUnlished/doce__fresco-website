<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JuiceController extends Controller
{
    /**
     * Show the landing page with the hero section.
     */
    public function index()
    {
        return view('landing');
    }

    /**
     * Show the About Us page (Sobre Nós).
     */
    public function about()
    {
        return view('about');
    }

    /**
     * Show the Juices / Products catalog page (Nossos Sumos).
     */
    public function juices()
    {
        $flavors = [
            [
                'name' => 'Laranja do Pomar',
                'tag' => '100% Pura Fruta',
                'tag_class' => 'tag-orange',
                'desc' => 'Sumo de laranja natural prensado a frio, naturalmente doce e rico em Vitamina C ativa.',
                'ingredients' => '100% Laranjas do Algarve',
                'benefits' => 'Imunidade • Energia Natural • Sem Açúcar',
                'color' => '#ff7a00',
            ],
            [
                'name' => 'Maçã & Hortelã',
                'tag' => 'Refrescante',
                'tag_class' => 'tag-lime',
                'desc' => 'Equilíbrio perfeito entre a doçura da maçã fresca e o frescor balsâmico da hortelã silvestre.',
                'ingredients' => '95% Maçã de Alcobaça, 5% Hortelã',
                'benefits' => 'Digestão • Hidratação • Vitalidade',
                'color' => '#83b325',
            ],
            [
                'name' => 'Citrus Tropical',
                'tag' => 'Exótico',
                'tag_class' => 'tag-yellow',
                'desc' => 'Explosão tropical de maracujá aromático, laranjas sumarentas e tangerinas colhidas à mão.',
                'ingredients' => 'Maracujá, Laranja, Tangerina',
                'benefits' => 'Antioxidante • Revitalizante • Sabor Intenso',
                'color' => '#ffb800',
            ],
            [
                'name' => 'Frutos Vermelhos',
                'tag' => 'Antioxidante',
                'tag_class' => 'tag-red',
                'desc' => 'Combinação aveludada de morangos silvestres, framboesas e amoras frescas das encostas.',
                'ingredients' => 'Morango, Framboesa, Amora, Maçã',
                'benefits' => 'Juventude Celular • Rico em Polifenóis',
                'color' => '#ea1d2c',
            ],
            [
                'name' => 'Verde Revitalizante',
                'tag' => 'Detox',
                'tag_class' => 'tag-green',
                'desc' => 'Mistura botânica leve e desintoxicante de maçã verde, pepino crocante, couve e limão.',
                'ingredients' => 'Couve, Maçã Verde, Pepino, Limão',
                'benefits' => 'Desintoxicação • Fibras • Alcalinizante',
                'color' => '#1eb258',
            ],
            [
                'name' => 'Manga & Gengibre',
                'tag' => 'Energia Viva',
                'tag_class' => 'tag-orange',
                'desc' => 'Textura densa e tropical de manga madura com toque aromático e estimulante de gengibre.',
                'ingredients' => 'Manga Madura, Maçã, Gengibre Fresco',
                'benefits' => 'Metabolismo • Imunidade • Anti-inflamatório',
                'color' => '#ff9100',
            ],
        ];

        return view('juices', compact('flavors'));
    }

    /**
     * Show the Origin & Sourcing page (Origem).
     */
    public function origin()
    {
        return view('origin');
    }

    /**
     * Show the Contact page (Contacto).
     */
    public function contact()
    {
        return view('contact');
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

        return redirect()->route('contact')
            ->with('success', 'Obrigado, ' . $validated['name'] . '! A sua mensagem foi enviada com sucesso.');
    }
}
