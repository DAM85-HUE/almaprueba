<template> 
<div>
<Header/>
<div class="container">
  <center><h1>Categorias de productos</h1></center>
  <br><br>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
        <th scope="col">Estado</th>
      <th scope="col">Fecha creacion</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="categories in Listacategories" :key="categories.id">
      <th scope="row">{{categories.id}}</th>
     
      <td>{{categories.name}}</td>
       <td>{{categories.description}}</td>
        <td>{{categories.active}}</td>
        <td>{{categories.created_at}}</td>
      <td></td>
    </tr>
  
  </tbody>
</table>
</div>

<br><br><br><br><br>

<Footer/>

</div>
</template>



<script>
import Header from '@/components/Header.vue';
import Footer from '@/components/Footer.vue';
import axios from 'axios';

export default{
name:"Dashboard",
data(){
return{
Listacategories:null,


}

},

components:{
Header,
Footer

},
mounted:function(){
let categories="http://localhost:8000/api/categorias";
axios.get(categories).then(data => {
  this.Listacategories=data.data;


}

)

}


}
</script>

<style scoped>

</style>