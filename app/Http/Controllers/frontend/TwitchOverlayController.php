<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FFXIVLogos;
use App\Models\FfxivLogoSelected;
use Illuminate\Support\Facades\Storage;


class TwitchOverlayController extends Controller
{
    public function test(){
        return view('frontend.twitch_overlays.test');
    }

public function uploadLogo(Request $request)
{
    $request->validate([
        'logo_upload' => 'required|image|max:2048', // max 2MB, nur Bilder
    ]);

    $file = $request->file('logo_upload');
    $originalName = $file->getClientOriginalName();
    $uploadDir = public_path('frontend/uploads/assets/images/ffxiv');

    // Prüfe ob Ordner existiert, sonst erstellen
    if (!file_exists($uploadDir)) {
        mkdir($uploadDir, 0755, true);
    }

    $filePath = $uploadDir . '/' . $originalName;

    if (file_exists($filePath)) {
        return redirect()->back()
            ->withErrors(['logo_upload' => 'Datei mit dem Namen "' . $originalName . '" existiert bereits. Bitte benenne die Datei um.'])
            ->withInput();
    }

    // Datei verschieben
    $file->move($uploadDir, $originalName);

    // Pfad, der in DB gespeichert wird (relativ zum public Ordner)
    $dbPath = 'frontend/uploads/assets/images/ffxiv/' . $originalName;

    FFXIVLogos::create([
        'file_name' => $originalName,
        'venue_name' => 'User Upload',
        'logo_path' => $dbPath,
    ]);

    return redirect()->back()->with('status', 'logo-uploaded');
}



    public function editLogo()
    {
        $logos = FFXIVLogos::all();
        $activeLogoId = auth()->user()->logo_id ?? null; // Beispiel
        return view('backend.pages.twitch.overlays.ffxiv-logo-edit', compact('logos', 'activeLogoId'));
    }

    public function updateLogo(Request $request)
    {
        // Validierung
        $validated = $request->validate([
            'selected_logo' => ['required', 'exists:ffxiv_logos,id'], // Annahme: Tabelle heißt ffxiv_logos
        ]);

        $selectedLogoId = $validated['selected_logo'];

        // Hole den vorhandenen Datensatz, oder erstelle neu (wenn z.B. nur ein Eintrag existieren soll)
        // Wenn du per User speichern willst, kannst du z.B. where('user_id', auth()->id()) nutzen
        $logoSelected = FfxivLogoSelected::first();

        if (!$logoSelected) {
            $logoSelected = new FfxivLogoSelected();
        }

        // Aktualisiere die logo_id
        $logoSelected->logo_id = $selectedLogoId;
        $logoSelected->save();

        return redirect()->back()->with('status', 'logo-updated');
    }

    public function showLogo()
{
    // Hole den Eintrag aus ffxiv_logo_selected (z.B. erster Eintrag)
    $selected = FfxivLogoSelected::first();

    // Falls kein Eintrag, ggf. ein Standard-Logo setzen
    $logoPath = null;

    if ($selected) {
        $logo = FFXIVLogos::find($selected->logo_id);
        if ($logo) {
            $logoPath = $logo->logo_path;
        }
    }

    return view('frontend.twitch_overlays.test', ['logoPath' => $logoPath]);
}
}
