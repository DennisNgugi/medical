<template>
  <div class="row mt-3">
     <!-- <MenuBar/> -->
     <!-- <router-view></router-view> -->
     <div class="col-12">
         <div class="card">
             <div class="card-header">Patient Queue (IN ORDER OF TIME)</div>
             <div class="card-body">
               <table class="table  table-striped">
                 <thead>
                   <tr>

                   <th>#</th>
                   <th>Patient seen</th>
                   <th>Department</th>
                   <th>Date and Time</th>
                   <th>Medical Practitioner</th>

                 </tr>
                 </thead>
                 <tbody>
                   <!-- <tr v-for="(p,index) in queue" @key="index">
                     <td>{{index+1}}</td>
                     <td>{{p.patient_name}}</td>
                     <td>{{p.contact}}</td>
                     <td>{{p.created_at}}</td>
                     <td>
                      <router-link :to="{ name: '', params: {} }"></router-link>
                     </td>
                   </tr> -->
                 </tbody>
               </table>
             </div>
         </div>

       </div>
  </div>

</template>
<script>
export default{
  data(){
    return{
      department: this.$route.params.department
    }
  }
}
</script>
