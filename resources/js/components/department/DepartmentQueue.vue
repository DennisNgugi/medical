<template>
  <div class="row mt-3">
     <!-- <MenuBar/> -->
     <!-- <router-view></router-view> -->
     <div class="col-12">
         <div class="card">
             <div class="card-header">Patient Queue</div>
             <div class="card-body">
               <table class="table  table-striped">
                 <thead>
                   <tr>

                   <th>#</th>
                   <th>Patient name</th>
                   <th>Contact</th>
                   <th>Action</th>

                 </tr>
                 </thead>
                 <tbody>
                   <!-- <tr v-for="(p,index) in patients" @key="index">
                     <td>{{index+1}}</td>
                     <td>{{p.patient_name}}</td>
                     <td>{{p.contact}}</td>
                     <td>
                        <button type="button"  @click="checkIn(p.patient_name,p.id)" class="btn btn-info btn-sm">Check in</button>
                        <!-- <button type="button" v-else name="button" class="btn btn-warning btn-sm">Added</button>
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
export default {
}
</script>

<style lang="css" scoped>
</style>
