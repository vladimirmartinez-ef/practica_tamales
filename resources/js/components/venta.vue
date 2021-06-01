<template>
    <div class="container">
    <div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Elija su combo</div>

        <div class="card-body">
            <form action="" >
                <table id="tabla" class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Accion</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(combo , index) in combos" :key="index"> 
                        <th scope="row">{{combo.id_combo}}</th>
                        <td>{{combo.nombre}}</td>
                        <td>{{combo.descripcion}}</td>
                        <td>{{combo.precio}}</td>
                        
                        <td><input class="btn btn-success" @click="agregarVenta(combo.id_combo)"  value="Comprar" style="width: 100px;"></td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
        </div>
        <div class="card">
            <div class="card-header">Compras realizadas</div>

            <div class="card-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Combo</th>
                        <th scope="col">Precio</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="(venta , index) in ventas" :key="index"> 
                        <th scope="row">{{venta.id}}</th>
                        <td>{{venta.nombre}}</td>
                        <td>{{venta.precio}}</td>
                    </tr>
                </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
</div>
</template>

<script>
export default {
  data() {
    return {
      ventas: [],
      venta:{
          id:0,
          user_id:0,
          combo_id:0,

      },
      // usuarios:[],
      // usuarios:{
      //     id:0,
      //     nombre:'',
      //     email:'',
      //     direccion:'',

      // },
      combos: [],
      item: {
        id: 0,
        nombre: '',
        descripcion: '',
        precio: 0.0,
      },
    };
  },
  created() {
    axios.get("/ventas").then((res) => {
      this.ventas = res.data;
      
    });
    axios.get('/combos').then(res => {
      this.combos = res.data;

    });
   
  },
  methods: {
    agregarVenta(id) {
      const nuevaVenta = {
        combo_id: id,
      };
      this.venta = { id: 0, user_id: 0, combo_id: 0 };
      let this2=this
      axios.post("/ventas", nuevaVenta).then((res) => {
        
        this.ventas=res.data
      });
      
    }
  },
  getVentas(){
      this.ventas=[]
    axios.get("/ventas").then((res) => {
      this.ventas = res.data;
    });
  },
};

</script>
