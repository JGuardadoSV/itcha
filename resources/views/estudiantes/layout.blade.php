<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio ITCHA</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.3.4/vue.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.js"></script>
    

</head>
<body>
  
<div class="container">
    @yield('content')
</div>
   

<script>

    var app= new Vue({
  el: '#aplicacion',
  data() {
    return {
      
      codigo: '',
      nombres: '',
      apellidos: '',
      sexo: '',
      carrera: ''
    }
  },
  methods: {
    submitForm() {
      axios.post('//registro.itcha.online/registropost', {
        codigo: this.codigo,
        nombres: this.nombres,
        apellidos: this.apellidos,
        sexo: this.sexo,
        carrera:this.carrera
      }).then(response => {
        // console.log(response);
        // this.response = response.data
        alert("Estudiante registrado con exito")
      }).catch(error => {
        alert("ocurrio un error")
      })
      
    }
  }
})

    </script>
</body>
</html>