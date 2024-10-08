<x-app-layout>
    <div class="min-h-screen p-10">
        <!-- Kapteinis Section -->
        <div class="bg-gray-700 text-white shadow-lg rounded-lg p-6 mb-8 text-center">
            <h2 class="text-3xl font-bold mb-4">Kapteinis</h2>
            <h3 class="text-xl mb-4">Gustavs</h3>
            <h2 class="text-lg mb-4">Gustavs ir dabisks līderis, kurš spēj izcelt labāko ikvienā komandā. Ar savu pozitīvo attieksmi un skaidro redzējumu viņš motivē komandu efektīvai sadarbībai. Viņa spēja iedvesmot radošumu nodrošina, ka visi piedalās ar savām idejām, padarot mūsu mājas lapas izveidi gan patīkamu, gan veiksmīgu. Gustavs uzskata, ka vienota komanda var pārvarēt jebkuru izaicinājumu, un vienmēr aicina mūs tiekties pēc izcilības.</h2>
            <div class="flex justify-center">

            <img src="{{ asset('img/gustavs.jpg') }}" class="w-32 h-32 rounded-full mb-4" alt="Gustavs' profile picture">
            </div>
        </div>

        <!-- Two boxes side by side (Matiss and Elvis) -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
            <!-- Matiss Section -->
            <div class="bg-gray-700 text-white shadow-lg rounded-lg p-6 text-center">
                <h2 class="text-3xl font-bold mb-4">Master Programmer</h2>
                <h3 class="text-xl mb-4">Matiss</h3>
                <h2 class="text-lg mb-4">Matīss ir izcils un gudrs programmētājs, kurš spēj tikt galā ar jebkuru izaicinājumu. Viņa radošā pieeja un tehniskās prasmes ļauj realizēt pat visambiciozākās idejas. Matīss vienmēr ir gatavs palīdzēt kolēģiem, daloties savās zināšanās un pieredzē. Viņš ir komandas balsts, uz kura var paļauties, un viņa klātbūtne ievērojami uzlabo darba atmosfēru.</h2>
                <div class="flex justify-center">
                <img src="{{ asset('img/matiss.jpg') }}" class="w-32 h-32 rounded-full mb-4" alt="Matiss' profile picture">
                </div>
            </div>

            <!-- Elvis Section -->
            <div class="bg-gray-700 text-white shadow-lg rounded-lg p-6 text-center">
                <h2 class="text-3xl font-bold mb-4">Pro Programmer</h2>
                <h3 class="text-xl mb-4">Elvis</h3>
                <h2 class="text-lg mb-4">Elvis ir kluss, taču ļoti spējīgs programmētājs, kurš spēj paveikt jebkuru uzdevumu, ko viņam uztic. Pat ja viņš izmanto neparastas pieejas, piemēram, Zaza, viņa rezultāti vienmēr ir izcili. Elvis ir pacietīgs un apņēmīgs, un viņa precizitāte un uzmanība detaļām padara viņu par neaizvietojamu komandas locekli. Viņš vienmēr ir gatavs uzņemties izaicinājumus un atrast risinājumus.</h2>
                <div class="flex justify-center">
                <img src="{{ asset('img/elvis.jpg') }}" class="w-32 h-32 rounded-full mb-4" alt="Elvis' profile picture">
                </div>
            </div>
        </div>

        <!-- Two boxes side by side (Kristaps and Marsmells) -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Kristaps Section -->
            <div class="bg-gray-700 text-white shadow-lg rounded-lg p-6 text-center">
                <h2 class="text-3xl font-bold mb-4">MEGA Designer</h2>
                <h3 class="text-xl mb-4">Vasīlījs</h3>
                <h2 class="text-lg mb-4">Kristaps ir talantīgs un izskatīgs dizainers, kurš spēj radīt vizuāli pievilcīgus un funkcionālus risinājumus. Viņa radošums un prasme izprast klientu vajadzības ļauj viņam izstrādāt dizainus, kas ne tikai izskatās lieliski, bet arī atbilst mērķiem. Kristaps vienmēr ir gatavs jauniem izaicinājumiem un spēj pielāgoties, lai nodrošinātu, ka katrs projekts ir veiksmīgs</h2>
                <div class="flex justify-center">
                    <img src="{{ asset('img/vasilijs.jpg') }}" class="w-32 h-32 rounded-full mb-4" alt="Vasīlījs' profile picture">
                </div>
            </div>

            <!-- Marsmells Section -->
            <div class="bg-gray-700 text-white shadow-lg rounded-lg p-6 text-center">
                <h2 class="text-3xl font-bold mb-4">Special Consultant</h2>
                <h3 class="text-xl mb-4">Marsels</h3>
                <h2 class="text-lg mb-4">Marsmelis ir programmētājs, kuram ir nepieciešama īpaša palīdzība ar galvas problēmām. Lai gan viņam ir savas grūtības, viņš vienmēr cenšas saglabāt pozitīvu attieksmi un bieži vien stulbi smaida. Viņa mērķis ir radīt risinājumus, kas ir gan efektīvi, gan radoši, neskatoties uz viņa problēmām.</h2>
                <div class="flex justify-center">
                <img src="{{ asset('img/marsels.jpg') }}" class="w-32 h-32 rounded-full mb-4" alt="Marsels' profile picture">
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
