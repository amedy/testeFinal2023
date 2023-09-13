
<template>
    <body>
        <div class="flex h-screen">
            <!-- Coluna da esquerda - Carrossel -->
            <div class="w-1/2 h-full">

                <!-- Coloque o conteúdo do carrossel aqui -->
                <Slides></Slides>

            </div>

            <!-- Coluna da direita - Formulário -->
            <div class=" cores w-1/2 p-8 h-screen overflow-y-scroll">
                <div class="text-center">
                    <h1 class="text-2xl font-bold mb-4">Para fazer a requisição preencha os campos abaixo!</h1>
                </div>
                <!-- <Mensagens :msg="msg" v-show="msg"></Mensagens> -->
                <form>
                    <div class="space-y-12" id="form11">
                        <!-- o campo de usuário -->

                        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="sm:col-span-2 sm:col-start-1">
                                <label for="nome" class="block text-sm  font-medium leading-6 text-gray-900">Nome /
                                    Empresa*</label>
                                <div class="mt-2">
                                    <input type="text" v-model="pfuxelacliente.nome" autocomplete="nome"
                                        class="block w-full pl-3  rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    <p v-if="errors.nome" class="text-sm italic colorr">{{ errors.nome[0] }}</p>
                                </div>
                                <span class="text red"></span>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email*</label>
                                <div class="mt-2">
                                    <input id="email" name="email" type="email" autocomplete="email" required=""
                                        v-model="pfuxelacliente.email"
                                        class="block w-full pl-3 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    <p v-if="errors.email" class="text-sm italic colorr">{{ errors.email[0] }}</p>

                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="contacto"
                                    class="block text-sm font-medium leading-6 text-gray-900">Contacto*</label>
                                <div class="mt-2">
                                    <input type="contacto" v-model="pfuxelacliente.contacto" autocomplete="contacto"
                                        class="block w-full pl-3 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    <p v-if="errors.contacto" class="text-sm italic colorr">{{ errors.contacto[0] }}</p>
                                </div>
                            </div>
                            <div class="sm:col-span-2 sm:col-start-1">
                                <label for="Data_requesicao" class="block text-sm font-medium leading-6 text-gray-900">Data
                                    a
                                    Requisitar*</label>
                                <div class="mt-2">
                                    <input type="date" v-model="pfuxelacliente.Data_requesicao" autocomplete="data"
                                        class="block w-full pl-3 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    <p v-if="errors.Data_requesicao" class="text-sm italic colorr">{{
                                        errors.Data_requesicao[0] }}</p>
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="Local" class="block text-sm font-medium leading-6 text-gray-900">Local de
                                    partida*</label>
                                <div class="mt-2">
                                    <input type="text" v-model="pfuxelacliente.local_partida" autocomplete="Local"
                                        class="block w-full pl-3 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    <p v-if="errors.local_partida" class="text-sm italic colorr">{{ errors.local_partida[0]
                                    }}</p>
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="destino" class="block text-sm font-medium leading-6 text-gray-900">Destino
                                    da
                                    Viatura*</label>
                                <div class="mt-2">
                                    <input type="text" v-model="pfuxelacliente.destino_partida" autocomplete="destino"
                                        class="block w-full pl-3 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    <p v-if="errors.destino_partida" class="text-sm italic colorr">{{
                                        errors.destino_partida[0] }}</p>
                                </div>
                            </div>
                            <div class="sm:col-span-2 sm:col-start-1">
                                <label for="passageiros" class="block text-sm font-medium leading-6 text-gray-900">Números
                                    de
                                    Passageiros*</label>
                                <div class="mt-2">
                                    <input type="text" v-model="pfuxelacliente.passageiros" autocomplete="passageiros"
                                        class="block w-full pl-3 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    <p v-if="errors.passageiros" class="text-sm italic colorr">{{ errors.passageiros[0] }}
                                    </p>
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="estimativa" class="block text-sm font-medium leading-6 text-gray-900">Estimativa
                                    Entrega*</label>
                                <div class="mt-2">
                                    <input type="date" v-model="pfuxelacliente.Data_estimativa_entrega"
                                        autocomplete="estimativa"
                                        class="block w-full pl-3 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    <p v-if="errors.Data_estimativa_entrega" class="text-sm italic colorr">{{
                                        errors.Data_estimativa_entrega[0] }}</p>
                                </div>
                            </div>
                            <div class="sm:col-span-2">
                                <label for="partida" class="block text-sm font-medium leading-6 text-gray-900">Horas
                                    de Partida Viatura*</label>
                                <div class="mt-2">
                                    <input type="time" v-model="pfuxelacliente.horas_partida_viatura" autocomplete="partida"
                                        class="block w-full pl-3 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    <p v-if="errors.horas_partida_viatura" class="text-sm italic colorr">{{
                                        errors.horas_partida_viatura[0] }}</p>
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <label for="first-name" class="block text-sm font-medium leading-6 text-gray-900">Horas
                                    de Entrega Viatura*</label>
                                <div class="mt-2">
                                    <input type="time" v-model="pfuxelacliente.horas_entrega_viatura"
                                        autocomplete="given-name"
                                        class="block w-full pl-3 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    <p v-if="errors.horas_entrega_viatura" class="text-sm italic colorr">{{
                                        errors.horas_entrega_viatura[0] }}</p>
                                </div>
                            </div>
                            <!-- file import -->
                            <div class="sm:col-span-3">
                                <label for="flile" class="block text-sm font-medium leading-6 text-gray-900">Adiciona um
                                    ficheiro*</label>
                                <div class="mt-2">
                                    <input type="file" accept="image/*" v-on="onFileChange" @change="onFileChange"
                                        class="block w-full   text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    <p v-if="errors.ficheiro" class="text-sm italic colorr">{{
                                        errors.ficheiro[0] }}</p>
                                </div>

                            </div>
                            <!-- seleciona as espessificaçoes da viaturas -->
                            <div class="sm:col-span-3">
                                <Listbox as="div" v-model="selected">
                                    <ListboxLabel class="block text-sm font-medium leading-6 text-black-900">Categoria de
                                        viatura* </ListboxLabel>
                                    <div class="relative mt-2">
                                        <ListboxButton
                                            class="relative w-full cursor-default rounded-md bg-rose-100 py-1.5 pl-3 pr-10 text-left text-white-900 shadow-sm ring-1 ring-inset ring-gray-600 focus:outline-none focus:ring-2 focus:ring-orange-500 sm:text-sm sm:leading-6">
                                            <span class="flex items-center">

                                                <span class="ml-3 block truncate">{{ selected.name }}</span>
                                            </span>
                                            <span
                                                class="pointer-events-none absolute inset-y-0 right-0 ml-3 flex items-center pr-2">
                                                <ChevronUpDownIcon class="h-5 w-5 text-gray-400" aria-hidden="true" />
                                            </span>
                                        </ListboxButton>

                                        <transition leave-active-class="transition ease-in duration-100"
                                            leave-from-class="opacity-100" leave-to-class="opacity-0">
                                            <ListboxOptions
                                                class="absolute z-10 mt-1 max-h-56 w-full overflow-auto rounded-md bg-white py-1 text-base shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm">
                                                <ListboxOption as="template" v-for="person in people" :key="person.id"
                                                    :value="person" v-slot="{ active, selected }">
                                                    <li
                                                        :class="[active ? 'bg-orange-400 text-white' : 'text-gray-900', 'relative cursor-default select-none py-2 pl-3 pr-9']">
                                                        <div class="flex items-center">
                                                            <span
                                                                :class="[selected ? 'font-semibold' : 'font-normal', 'ml-3 block truncate']">{{
                                                                    person.name }}</span>
                                                        </div>

                                                        <span v-if="selected"
                                                            :class="[active ? 'text-white' : 'text-orange-400', 'absolute inset-y-0 right-0 flex items-center pr-4']">
                                                            <CheckIcon class="h-5 w-5" aria-hidden="true" />
                                                        </span>
                                                    </li>
                                                </ListboxOption>
                                            </ListboxOptions>
                                        </transition>
                                    </div>
                                </Listbox>
                            </div>
                            <!-- grande ou pequeno  -->
                            <div class="sm:col-span-3">
                                <Listbox as="div" v-model="selected">
                                    <ListboxLabel class="block text-sm font-medium leading-6 text-black-900">Modelo de
                                        viatura* </ListboxLabel>
                                    <div class="relative mt-2">
                                        <ListboxButton
                                            class="relative w-full cursor-default rounded-md bg-rose-100 py-1.5 pl-3 pr-10 text-left text-white-900 shadow-sm ring-1 ring-inset ring-gray-600 focus:outline-none focus:ring-2 focus:ring-orange-500 sm:text-sm sm:leading-6">
                                            <span class="flex items-center">

                                                <span class="ml-3 block truncate">Ligeiro</span>
                                            </span>
                                            <span
                                                class="pointer-events-none absolute inset-y-0 right-0 ml-3 flex items-center pr-2">
                                                <ChevronUpDownIcon class="h-5 w-5 text-gray-400" aria-hidden="true" />
                                            </span>
                                        </ListboxButton>

                                        <transition leave-active-class="transition ease-in duration-100"
                                            leave-from-class="opacity-100" leave-to-class="opacity-0">
                                            <ListboxOptions
                                                class="absolute z-10 mt-1 max-h-56 w-full overflow-auto rounded-md bg-white py-1 text-base shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm">
                                                <ListboxOption as="template" v-for="person in people" :key="person.id"
                                                    :value="person" v-slot="{ active, selected }">
                                                    <li
                                                        :class="[active ? 'bg-orange-400 text-white' : 'text-gray-900', 'relative cursor-default select-none py-2 pl-3 pr-9']">
                                                        <div class="flex items-center">
                                                            <span
                                                                :class="[selected ? 'font-semibold' : 'font-normal', 'ml-3 block truncate']">{{
                                                                    person.modelo }}</span>
                                                        </div>

                                                        <span v-if="selected"
                                                            :class="[active ? 'text-white' : 'text-orange-400', 'absolute inset-y-0 right-0 flex items-center pr-4']">
                                                            <CheckIcon class="h-5 w-5" aria-hidden="true" />
                                                        </span>
                                                    </li>
                                                </ListboxOption>
                                            </ListboxOptions>
                                        </transition>
                                    </div>
                                </Listbox>
                            </div>
                        </div>

                        <div class="border-b border-gray-900/10 pb-12">
                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                <div class="col-span-full">
                                    <label for="about"
                                        class="block text-sm font-medium leading-6 text-gray-900">Mensagem</label>
                                    <div class="mt-2">
                                        <textarea v-model="pfuxelacliente.descricao" rows="3"
                                            placeholder="Nao tem a viatura que desjejas, lista aqui."
                                            class="block w-full pl-3 rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <button type="button" @click="addPfuxelaCliente()" id="btn11"
                            class="btn flex items-center justify-center w-64 h-12 bg-indigo-600 rounded-full text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus:outline-none focus:ring focus:ring-indigo-300">
                            Requisitar
                        </button>
                        <p class="mt-3 text-sm leading-6 text-gray-600 flex justify-center">Todos campos com
                            ( <span class="text-red-500"> * </span> ) são
                            obrigatórios.</p>
                    </div>
                </form>
            </div>
        </div>
    </body>
</template>
<script setup >
import { ref } from "vue";
import swal from 'sweetalert';
import Mensagens from "../menssagem/Mensagens.vue";
import { Listbox, ListboxButton, ListboxLabel, ListboxOption, ListboxOptions } from '@headlessui/vue'
import { CheckIcon, ChevronUpDownIcon } from '@heroicons/vue/20/solid'
const people = [
    {
        id: 1,
        name: 'Volvo- BT45',
        modelo: 'Ligeiro Dupla Cabine',
    },
    {
        id: 2,
        name: 'Arley Mustang',
    },
    {
        id: 3,
        name: 'Toyota 4x4',
    },
    {
        id: 4,
        name: 'Lexus',
    },
    {
        id: 5,
        name: 'Mercedes',
    },


]


const selected = ref(people[3])
const agreed = ref(false);
</script>

<script >
import Slides from '../slides/Slides.vue';


export default {
    components: {
        Slides,
        Mensagens,
    },
    setup() {
        const file = ref('')
        const success = ref(false)
        const pfuxelacliente = (e) => {
            file.value = e.target.files[0];
        }
        const addPfuxelaCliente = (e) => {
            e.preventDefault();
            let data = new FormData();
            data.append('file', file.value);
            axios.post('/api/upload', data).then(
                function (res) {
                    success.value = true
                }
            ).catch(function (err) {
                console.log(err)
            });
        }
        // return {
        //     pfuxelacliente,
        //     addPfuxelaCliente
        // }
    },

    data: function () {
        return {

            pfuxelacliente: {
                nome: "Manucho",
                email: "Felizardo@gmail.com",
                contacto: "828987587",
                Data_requesicao: "2022-01-03",
                local_partida: "Lisboa",
                destino_partida: "Portos de Portugal",
                passageiros: "15",
                Data_estimativa_entrega: "2023-04-10",
                horas_partida_viatura: "12:13:13",
                horas_entrega_viatura: "09:02:19",
                descricao: "Escreve qualquer coisa",
                ficheiro: "",
            },

            errors: {}
        }
    },
    methods: {

        addPfuxelaCliente() {

            // if(!this.pfuxelacliente.nome == ""){
            //     console.log("Nome invalido");
            //     formularioVlatido = false;
            // }
            // if(!this.pfuxelacliente.email == ""){
            //     console.log("Nome invalido");
            //     this.pfuxelacliente.nomeError = "Nome invalido";
            //     formularioVlatido = false;
            // }

            axios.post('api/home/store', this.pfuxelacliente

            )
                .then(Response => {
                    console.log(Response);
                    this.errors = {}
                    // this.msg = 'Requisição submetida com sucesso!';
                    // setTimeout(() => this.msg = "Requisição submetida com sucesso!", 2000);
                    // setTimeout(() => this.msg = "", 1000);
                    if (Response.status = 201) {

                        swal({
                            title: "Requisição submetida com sucesso!!",
                            text: "Click OK para sair!",
                            icon: "success",
                            buttons: false,
                            timer: 3000,

                        });
                        this.pfuxelacliente.nome = '';
                        this.pfuxelacliente.email = '';
                        this.pfuxelacliente.contacto = '';
                        this.pfuxelacliente.Data_requesicao = '';
                        this.pfuxelacliente.local_partida = '';
                        this.pfuxelacliente.destino_partida = '';
                        this.pfuxelacliente.passageiros = '';
                        this.pfuxelacliente.Data_estimativa_entrega = '';
                        this.pfuxelacliente.horas_partida_viatura = '';
                        this.pfuxelacliente.horas_entrega_viatura = '';
                        this.pfuxelacliente.descricao = '';
                        this.pfuxelacliente.ficheiro = '';
                    }
                })
                .catch(error => {
                    this.errors = error?.response?.data?.errors;
                })
        },
        //Adicao ao ficheiro file
        onFileChange(e) {
            this.file = e.target.ficheiro

            // eslint-disable-next-line no-restricted-syntax
            for (const i of Object.keys(this.file)) {
                this.form.documentos[i] = this.file[i]

                const self = this
                const reader = new FileReader()
                reader.onload = function (e) {
                    self.form.documentos.push(e.target.result)
                };
                reader.readAsDataURL(this.file[i])
            }
        },
    }
}
</script>



<style scoped>
/*.bodes {
    display: flex;
    flex-direction: column;
    height: 100%;
}
*/
.texto {
    background-color: #fff;

    /* or 97% */
    display: flex;
    color: #f68e13;
    padding: 20px;
}

.cores {
    background-color: #f68e13;
}

.colorr {
    color: red;
}

h1 {
    font-family: "Rubik";
    font-style: normal;
    font-weight: 900;
    font-size: 32px;
    line-height: 31px;
    text-align: center;
    letter-spacing: -0.005em;
}

.btn {
    background-color: #626b36;

}

#form11 {
    margin: auto 21px auto 25px;
}

p,
label {
    color: #fff;
}

input,
textarea {
    background-color: #e9d3d3;
    border-radius: 0;
}

textarea {
    margin-bottom: -15px;
}

#botao {

    border-radius: 42px;
    /* background-color: #626b36; */
    width: 153px;
    margin-bottom: -10px;
    margin: 50px;
}

/*
#btn11 {
    margin-left: 30%;

}**/
#btn11 {
    margin: auto;
}

#btn11:hover {
    background-color: #0c1f38;
    color: #fff;
}

.nova {
    height: 100%;
}
</style>
