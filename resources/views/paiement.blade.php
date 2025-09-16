@extends('layout')

@section('title', 'Paiement')

@section('content')
<div class="container mx-auto xl:max-w-[1280px] 2xl:max-w-[1720px] w-full px-4 pt-4 xl:mb-[118px] md:mb-40">
    <h2 class="text-xl ff-b text-xl xl:text-[31px] xl:leading-[38px] font-bold text-gray-800 leading-tight mb-10 xl:mb-[58px]">Confirmer et payer</h2>
    <div class="flex flex-col lg:flex-row gap-8">
        <div class="flex-1 lg:w-2/3">
            <div class="mb-8">
                <div class=" border rounded-lg border-gray-50 shadow p-4 mb-6">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <svg class="h-10 w-10 text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                            </svg>
                        </div>
                        <div class="ml-3">
                            <p class="text-lg font-lg ">
                                Date de réservation en forte demande
                            </p>
                            <p class="text-lg ">
                                Les réservations sont fréquentes pour ce centre
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-8">
                <h3 class="text-lg font-semibold text-gray-800 mb-4">Vos informations personnelles</h3>
                <div class="space-y-4">
                    <div>
                        <input type="text" placeholder="Nom Prénom" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-gray-50">
                    </div>
                    <div>
                        <input type="email" placeholder="Email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-gray-50">
                    </div>
                    <div>
                        <input type="tel" placeholder="Numéro de téléphone" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500 bg-gray-50">
                    </div>
                </div>
            </div>
            <hr class="my-8 border-gray-200">
            <div class="mb-8">
                <h3 class="text-lg font-semibold text-gray-800 mb-4">Votre test psychotechnique</h3>
                <div class="space-y-4">
                    <div class="flex items-center">
                        <div class="w-5 h-5 mr-3 flex-shrink-0">
                            <svg class="w-5 h-5 text-gray-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div>
                            <div class="font-medium text-gray-800">Date</div>
                            <div class="text-gray-600">12 mai 2025</div>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <div class="w-5 h-5 mr-3 flex-shrink-0">
                            <svg class="w-5 h-5 text-gray-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div>
                            <div class="font-medium text-gray-800">Horaire</div>
                            <div class="text-gray-600">12:30</div>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <div class="w-5 h-5 mr-3 flex-shrink-0">
                            <svg class="w-5 h-5 text-gray-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <div>
                            <div class="font-medium text-gray-800">Adresse</div>
                            <div class="text-gray-600">39 Rue Emile Steiner, 27200 Vernon</div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="my-8 border-gray-200">
            <div class="mb-8">
                <h3 class="text-lg font-semibold text-gray-800 mb-2">Choisissez votre moyen de paiement</h3>
                <div class="flex items-center mb-6">
                    <svg class="w-4 h-4 text-gray-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"/>
                    </svg>
                    <span class="text-sm text-gray-600 font-medium">100% SÉCURISÉ</span>
                </div>
                <div class="space-y-4">
                    <label class="flex items-center p-4 border border-gray-200 rounded-lg cursor-pointer hover:bg-gray-50">
                        <input type="radio" name="payment-method" value="card" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300" checked>
                        <div class="flex items-center space-x-3">
                            <div class="ml-4 flex space-x-1">
                                <img src="/images/carte-visa.png" alt="" srcset="">
                            </div>
                            <span class="text-gray-900 font-medium text-xl">Carte bancaire</span>
                        </div>
                    </label>
                    <label class="flex items-center p-4 border border-gray-200 rounded-lg cursor-pointer hover:bg-gray-50">
                        <input type="radio" name="payment-method" value="apple-pay" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300">
                        <div class="flex items-center space-x-3">
                            <div class="ml-4 text-white text-xs flex items-center justify-center font-bold">
                                <img src="/images/apple-pay.png" alt="" srcset="">
                            </div>
                            <span class="text-gray-900 text-xl font-medium">Apple Pay</span>
                        </div>
                    </label>
                    <label class="flex items-center p-4 border border-gray-200 rounded-lg cursor-pointer hover:bg-gray-50">
                        <input type="radio" name="payment-method" value="paypal" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300">
                        <div class="flex items-center space-x-3">
                            <div class="ml-4 text-white text-xs flex items-center justify-center font-bold">
                                <img src="/images/paypal.png" alt="" srcset="">
                            </div>
                            <span class="text-gray-900 text-xl font-medium">Paypal</span>
                        </div>
                    </label>
                    <label class="flex items-center p-4 border border-gray-200 rounded-lg cursor-pointer hover:bg-gray-50">
                        <input type="radio" name="payment-method" value="alma" class="h-4 w-4 text-blue-600 focus:ring-blue-500 border-gray-300">
                        <div class="flex items-center space-x-3">
                            <div class="ml-4 text-white text-xs flex items-center justify-center font-bold">
                                <img src="/images/alma.png" alt="">
                            </div>
                            <span class="text-gray-900 text-xl font-medium">Alma</span>
                        </div>
                    </label>
                </div>
            </div>
            <button class="w-full bg-pink-600 hover:bg-pink-700 text-white py-4 px-6 rounded-lg font-semibold text-lg flex items-center justify-center transition-colors">
                Je réserve mon test psychotechnique
                <svg class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"/>
                </svg>
            </button>
        </div>
        <div class="lg:w-1/3">
            <div class="sticky top-8">
                <div class="mx-auto w-full max-w-sm sm:max-w-full lg:max-w-lg xl:max-w-xl bg-white rounded-lg shadow-sm px-4 sm:px-6 py-6">
                    <h1 class="text-lg sm:text-xl lg:text-2xl font-semibold text-[#BF2A6B] mb-6">Récapitulatif de votre test psychotechnique</h1>
                    <div class="mb-6">
                        <p class="text-gray-600 text-lg sm:text-xl">Total à payer : <span class="font-semibold text-[#2A2A2A]">130.00€</span></p>
                    </div>
                    <div class="mb-8">
                        <p class="text-sm sm:text-md text-gray-600 leading-relaxed">En passant votre commande, vous acceptez les conditions générales de vente de la société AAAEP. Veuillez consulter notre politique de protection des données.</p>
                    </div>
                </div>
                <div class="grid grid-cols-3 gap-6 px-4 sm:px-0 my-8">
                    <div class="text-center">
                        <div class="w-12 h-12 mx-auto mb-3 bg-white shadow-md rounded-full flex items-center justify-center">
                            <svg class="h-6 w-6 text-green-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.042 21.672 13.684 16.6m0 0-2.51 2.225.569-9.47 5.227 7.917-3.286-.672Zm-7.518-.267A8.25 8.25 0 1 1 20.25 10.5M8.288 14.212A5.25 5.25 0 1 1 17.25 10.5" />
                            </svg>
                        </div>
                        <div>
                            <p class="font-semibold text-gray-900 mb-1 text-base sm:text-lg">Entraînement</p>
                            <p class="text-gray-600 text-sm sm:text-md">Gratuit illimité</p>
                        </div>
                    </div>
                    <div class="text-center">
                        <div class="w-12 h-12 mx-auto mb-3 bg-white shadow-md rounded-full flex items-center justify-center">
                            <svg class="h-6 w-6 text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                <path fill-rule="evenodd" d="M2.625 6.75a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Zm4.875 0A.75.75 0 0 1 8.25 6h12a.75.75 0 0 1 0 1.5h-12a.75.75 0 0 1-.75-.75ZM2.625 12a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0ZM7.5 12a.75.75 0 0 1 .75-.75h12a.75.75 0 0 1 0 1.5h-12A.75.75 0 0 1 7.5 12Zm-4.875 5.25a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Zm4.875 0a.75.75 0 0 1 .75-.75h12a.75.75 0 0 1 0 1.5h-12a.75.75 0 0 1-.75-.75Z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <div>
                            <p class="font-semibold text-gray-900 mb-1 text-base sm:text-lg">Résultats</p>
                            <p class="text-gray-600 text-sm sm:text-md">le Jour Même</p>
                        </div>
                    </div>
                    <div class="text-center">
                        <div class="w-12 h-12 mx-auto mb-3 bg-white shadow-md rounded-full flex items-center justify-center">
                            <svg class="h-6 w-6 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div>
                            <p class="font-semibold text-gray-900 mb-1 text-base sm:text-lg">Annulation</p>
                            <p class="text-gray-600 text-sm sm:text-md">Gratuite jusqu'à 48h</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection