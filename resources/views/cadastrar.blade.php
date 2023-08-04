<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastrar Clientes') }}
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-5 mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-10 text-gray-900">
                    <!-- Título do container -->
                    
                    <div id="sign-form-title" > {{ __("Formulário de Cadastro") }} </div>

                    <br>

                    <!-- Formulário em Tailwind -->
                    <form class="" action="{{url('/store')}}" method="POST">
                        @csrf
                        <!-- Input: Nome -->
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                            
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-nome">
                                Nome
                            </label>
                            
                            <input class="text-center appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-nome" type="text" name="nome">
                            </div>
                        </div>
                        <!-- Fim do Input Nome -->
                        <!-- Input: Endereço -->
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-endereco">
                                Endereço
                            </label>
                            <input class="text-center appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-endereco" type="text" name="endereco">
                            </div>
                        </div>
                        <!-- Fim do Input Endereço -->
                        <!-- Input: Bairro -->
                        <div class="flex flex-wrap -mx-3 mb-6">
                            <div class="w-full px-3">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-bairro">
                                Bairro
                            </label>
                            <input class="text-center appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-bairro" type="text" name="bairro">
                            </div>
                        </div>
                        <!-- Fim do Input Bairro -->
                        <!-- Inputs: CEP, Cidade e Estado -->
                        <div class="flex flex-wrap -mx-3 mb-2">
                            <!-- Input CEP -->
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-cep">
                                CEP
                            </label>
                            <input class="text-center appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-cep" type="text" name="cep">
                            </div>
                            <!-- Fim do Input CEP -->
                            <!-- Input Cidade -->
                            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-cidade">
                                Cidade
                            </label>
                            <input class="text-center appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-cidade" type="text" name="cidade">
                            </div>
                            <!-- Fim do Input Cidade -->
                            <!-- Input Estado -->
                        
                            <div class="sm:col-span-2"> 
                                <label for="country" class="block text-sm font-medium leading-6 text-gray-900">Estado</label>
                                <div class="mt-2">
                                <select id="country" name="country" autocomplete="country-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                    <option value="AC">AC</option>
                                    <option value="AL">AL</option>
                                    <option value="AP">AP</option>
                                    <option value="AM">AM</option>
                                    <option value="BA">BA</option>
                                    <option value="CE">CE</option>
                                    <option value="DF">DF</option>
                                    <option value="ES">ES</option>
                                    <option value="GO">GO</option>
                                    <option value="MA">MA</option>
                                    <option value="MT">MT</option>
                                    <option value="MS">MS</option>
                                    <option value="MG">MG</option>
                                    <option value="PA">PA</option>
                                    <option value="PB">PB</option>
                                    <option value="PR">PR</option>
                                    <option value="PE">PE</option>
                                    <option value="PI">PI</option>
                                    <option value="RJ">RJ</option>
                                    <option value="RN">RN</option>
                                    <option value="RS">RS</option>
                                    <option value="RO">RO</option>
                                    <option value="RR">RR</option>
                                    <option value="SC">SC</option>
                                    <option value="SP">SP</option>
                                    <option value="SE">SE</option>
                                    <option value="TO">TO</option>
                                </select>
                            </div>
                            </div>
                            
                            <!-- Fim do Input Estado -->
                        </div>
                        <!-- Fim dos Inputs: CEP, Cidade e Estado -->
                        <center>
                        <!-- Button de Cadastro -->
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full" id="sign-btn" type="submit">
                            Cadastrar
                        </button>
                        <!-- Fim do Button de Cadastro -->
                        </center>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
