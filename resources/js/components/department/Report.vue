<template>
  <div>

  <div class="row my-4">
    <div class="col-8">
      <div class="input-group">
        <input type="text" class="form-control" v-model="search" placeholder="Search patient...">
        <div class="input-group-prepend">
          <button type="button" class="btn btn-primary btn-sm" @click="searchReport" name="button">Search</button>
        </div>
      </div>

    </div>
  </div>
  <div v-if="showSearch == true">
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
                     <tr v-for="(p,index) in dummy" @key="index">
                       <td>{{index+1}}</td>
                       <td>{{p.patient_name}}</td>
                       <td>{{p.department}}</td>
                       <td>{{p.created_at|date}}</td>
                       <td>{{p.medical_practitioner}}</td>

                     </tr>
                   </tbody>
                 </table>
               </div>
           </div>

         </div>
    </div>
  </div>
  <div v-if="showSearch == false">
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
                     <tr v-for="(p,index) in reports" @key="index">
                       <td>{{index+1}}</td>
                       <td>{{p.patient_name}}</td>
                       <td>{{p.department}}</td>
                       <td>{{p.created_at|date}}</td>
                       <td>{{p.medical_practitioner}}</td>

                     </tr>
                   </tbody>
                 </table>
               </div>
           </div>

         </div>
    </div>
  </div>

</div>
</template>
<script>
export default {
  data(){
    return{
      reports:[],
      department: this.$route.params.department,
      search:'',
      showSearch:false,
      dummy:[]
    }

  },
  mounted:function(){
    this.fetchReport();
  },
  methods:{
    searchReport:function(){
        fetch('report/search?q='+this.search)
        .then(response => response.json())
        .then(response =>{
          this.dummy = response
          this.search=''
          this.showSearch = true
        }).
        catch(error =>{
          console.log(error)
        });
    },
    fetchReport:function(){
      let department = this.$route.params.department
      let uri = `/report/${department}`
      axios.get(uri).then((response)=>{
        this.reports = response.data
      })

    }
  }
}
</script>
