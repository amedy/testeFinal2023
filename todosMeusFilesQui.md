POT http://127.0.0.1:8000/api/home/store
Get http://127.0.0.1:8000/api/home/?
put> http://127.0.0.1:8000/api/home/5

addPfuxelaCliente() {
if (!this.pfuxelacliente.nome == '' || !this.pfuxelacliente.email == '' || !this.pfuxelacliente.contacto == '' || !this.pfuxelacliente.data_requesicao == '' || !this.pfuxelacliente.local_partida == '' || !this.pfuxelacliente.destino_partida == '' || !this.pfuxelacliente.passageiros == '' || !this.pfuxelacliente.horas_partida_viatura == '' || !this.pfuxelacliente.horas_entrega_viatura == '' || !this.pfuxelacliente.descricao == '') {
return;
}
axios.post('/http://127.0.0.1:8000/api/home/store', this.pfuxelacliente)
.then(response => {
console.log(response.data.message);
this.pfuxelacliente = {
nome: '',
email: '',
contacto: '',
data_requesicao: '',
local_partida: '',
destino_partida: '',
passageiros: '',
data_estimativa_entrega: '',
horas_partida_viatura: '',
horas_entrega_viatura: '',
descricao: ''

                        // Limpe os outros campos aqui
                    };
                    this.fetchClientes(); // Atualiza a lista de clientes após a criação
                })
                .catch(error => {
                    console.error(error);
                });


        }

         "id": 5,
    "nome": "Amedy Alifo",
    "email": "amedy.caisses@Hotmail.com",
    "contacto": "824349227",
    "Data_requesicao": "2023-03-05",
    "local_partida": "Luis Cabral",
    "destino_partida": "KfC",
    "passageiros": "2",
    "Data_estimativa_entrega": "2022-02-04",
    "horas_partida_viatura": "07:34:12",
    "horas_entrega_viatura": "01:23:02",
    "descricao": "Caso de teste",
    "created_at": "2023-06-16T09:10:58.000000Z",
    "updated_at": "2023-06-16T17:06:21.000000Z"

}

 <p v-if="errors.name" class="text-red-500 text-xs italic">{{ errors.name[0] }}</p>


swal({
  title: "Good job!",
  text: "You clicked the button!",
  icon: "success",
  button: "Aww yiss!",
});






##Welcome.blade
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')
</head>
<body id="app">
    <Principal>
        
    </Principal>

</body>
  
  </script>
</html>