@extends('layout')

@section('title', 'Complétez votre réservation')

@section('content')
    <div class="container mx-auto w-full xl:max-w-[1280px] 2xl:max-w-[1720px] mb-64 md:mb-40 px-4 pt-4 md:pt-[65px] ">
        <h2 class="text-xl ff-b text-xl xl:text-[31px] xl:leading-[38px] font-bold text-gray-800 leading-tight mb-10 xl:mb-[58px]">
            Complétez votre réservation
        </h2>

    <div class="flex flex-col xl:flex-row xl:gap-[73px] xl:space-x-[0px] xl:space-y-0 space-y-6 xl:space-y-0 xl:mt-[58px] xl:mb-0 mt-0 mb-0">
            <x-card
                title="Basic"
                subtitle="Votre test psychotechnique simple"
                price="0€"
                buttonColor="bg-[#F2F3F5]"
                buttonTextColor="text-[#353535]"
                bgHeader="bg-gray-100"
                iconColor="text-gray-800"
                :features="[
                    ['icon' => 'fas fa-hand-pointer', 'text' => 'Entraînement illimité et gratuit'],
                    ['icon' => 'fas fa-check-circle', 'text' => 'Annulation jusqu\'à 48 heures'],
                    ['icon' => 'far fa-envelope', 'text' => 'Recevez votre test le jour j'],
                ]"
            />
            <x-card
                title="Assurance"
                subtitle="Votre test psychotechnique simple"
                price="40€"
                buttonColor="bg-[#0DBC0D]"
                buttonTextColor="text-white"
                bgHeader="bg-[#0DBC0D]"
                borderColor="border-[#0DBC0D]"
                iconColor="text-[#0DBC0D]"
                :features="[
                    ['icon' => 'fas fa-hand-pointer', 'text' => 'Entraînement illimité et gratuit'],
                    ['icon' => 'fas fa-check-circle', 'text' => 'Annulation jusqu\'à 48 heures'],
                    ['icon' => 'fas fa-redo', 'text' => 'Repassez votre test pour 0€ (si test échoué)'],
                    ['icon' => 'far fa-envelope', 'text' => 'Recevez votre test le jour j'],
                    ['icon' => 'far fa-book', 'text' => 'Livret de préparation au test psychotechnique'],
                ]"
                description="A peine le prix d'un resto"
            />
            <x-card
                title="Complet"
                subtitle="Votre test psychotechnique simple"
                price="60€"
                buttonColor="bg-[#36578A]"
                buttonTextColor="text-white"
                bgHeader="bg-[#36578A]"
                borderColor="border-[#36578A]"
                iconColor="text-[#36578A]"
                :features="[
                    ['icon' => 'far fa-file-alt', 'text' => 'Entraînement illimité et gratuit'],
                    ['icon' => 'fas fa-check-circle', 'text' => 'Annulation jusqu\'à 24 heures'],
                    ['icon' => 'fas fa-redo', 'text' => 'Repassez votre test pour 0€ (si test échoué)'],
                    ['icon' => 'far fa-envelope', 'text' => 'Recevez votre test le jour j'],
                    ['icon' => 'far fa-book', 'text' => 'Livret de préparation au test psychotechnique'],
                    ['icon' => 'fas fa-download', 'text' => 'Téléchargez vos résultats en illimité'],
                ]"
                description="A peine le prix d'un resto"
            />
        </div>
    </div>
    <div class="bg-[#353535] shadow-xl border border-[#70707061] fixed bottom-0 w-full">
    <div class="container mx-auto w-full xl:max-w-[1280px] 2xl:max-w-[1720px] flex flex-col md:flex-row justify-between items-center gap-6 pt-[19px] pb-[12px]">
            <div class="bg-gray-100 rounded-2xl flex items-center gap-4 px-6 py-4">
                <i class="fa fa-calendar text-[#BF2A6B] text-xl"></i>
                <div>
                    <p class="text-[#36578a] font-bold text-md mb-1">Test psychotechnique le 28 mars à 14:00</p>
                    <p class="text-[#36578a] text-lg md:text-sm">15 rue de la république Montgeron 91230</p>
                </div>
            </div>
            <div class="flex flex-col text-white w-52 gap-3">
                <div class="flex items-center justify-between">
                    <p class="text-md">Total</p>
                    <p class="text-lg md:text-xl font-bold">135€</p>
                </div>
                <a href="/andriamihaja-paiement" class="bg-[#BF2A6B] hover:bg-pink-800 transition rounded-xl flex justify-center items-center text-md gap-2 py-2 text-center">
                    <span>Suivant</span>
                    <span>→</span>
                </a>
            </div>
        </div>
    </div>
@endsection