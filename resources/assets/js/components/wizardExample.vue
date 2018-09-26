<template>
    <div>
        <div id="exampleModal" tabindex="1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" :class=" [{show:isShow },'modal fade']" style="display: block; overflow-x: hidden;  overflow-y: auto; ">
            <div role="document" class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 id="exampleModalLabel" class="modal-title">Modal title</h5>
                        <button type="button" @click="hideModel" class="close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div> 
                    <div class="modal-body">                    
                        <div class="card">
                            <div class="card-header bg-white header-elements-inline">
                                <h6 class="card-title">Basic example</h6>
                                <div class="header-elements">
                                    <div class="list-icons">
                                        <a class="list-icons-item" data-action="collapse"></a>
                                        <a class="list-icons-item" data-action="reload"></a>
                                        <a class="list-icons-item" data-action="remove"></a>
                                    </div>
                                </div>
                            </div>
                            <form-wizard @on-complete="onComplete" shape="circle" color="#3498db">
                                <h2 slot="title">Fill The form</h2>   
                                <tab-content title="Personal details" icon="icon-user">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>University:</label>
                                                <input type="text" v-model="paymentMethod" class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Country:</label>
                                                <select name="university-country" data-placeholder="Choose a Country..." class="form-control form-control-select2" data-fouc>
                                                    <option></option> 
                                                    <option value="1">United States</option> 
                                                    <option value="2">France</option> 
                                                    <option value="3">Germany</option> 
                                                    <option value="4">Spain</option> 
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Degree level:</label>
                                                <input type="text" name="degree-level" placeholder="Bachelor, Master etc." class="form-control">
                                            </div>

                                            <div class="form-group">
                                                <label>Specialization:</label>
                                                <input type="text" name="specialization" placeholder="Design, Development etc." class="form-control">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>From:</label>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <select name="education-from-month" data-placeholder="Month" class="form-control form-control-select2" data-fouc>
                                                                    <option></option>
                                                                    <option value="January">January</option> 
                                                                    <option value="...">...</option> 
                                                                    <option value="December">December</option> 
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <select name="education-from-year" data-placeholder="Year" class="form-control form-control-select2" data-fouc>
                                                                    <option></option> 
                                                                    <option value="1995">1995</option> 
                                                                    <option value="...">...</option> 
                                                                    <option value="1980">1980</option> 
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <label>To:</label>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <select name="education-to-month" data-placeholder="Month" class="form-control form-control-select2" data-fouc>
                                                                    <option></option>
                                                                    <option value="January">January</option> 
                                                                    <option value="...">...</option> 
                                                                    <option value="December">December</option> 
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <select name="education-to-year" data-placeholder="Year" class="form-control form-control-select2" data-fouc>
                                                                    <option></option> 
                                                                    <option value="1995">1995</option> 
                                                                    <option value="...">...</option> 
                                                                    <option value="1980">1980</option> 
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label>Language of education:</label>
                                                <input type="text" name="education-language" placeholder="English, German etc." class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                </tab-content>
                                <tab-content title="Additional Info" icon="icon-gear">
                                    <div class="row" v-if="paymentMethod==='cash'">
                                        this is cash
                                    </div>
                                    <div class="row" v-if="paymentMethod!=='cash'">
                                        this is not cash
                                    </div>
                                </tab-content>
                                <tab-content title="Last step" icon="ti-check">
                                    
                                </tab-content>
                            </form-wizard>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-backdrop fade show" v-if="isShow"></div>
    </div>
</template>

<script>
import swal from 'sweetalert2';
import {FormWizard, TabContent} from 'vue-form-wizard'
import 'vue-form-wizard/dist/vue-form-wizard.min.css'
import axios from 'axios';


export default {
    data(){
        return {
            isShow:true,
            paymentMethod:'cash'
        }
    },
    methods:{
        onComplete: function(){
            var formData = new FormData();
            formData.append('foo', 'bar');
            this.showAlert();

        },
        showAlert(){
            const ipAPI = 'https://api.ipify.org?format=json'
                swal.queue([{
                title: 'Your public IP',
                confirmButtonText: 'Agree and Sign Up',
                text:
                    'Your public IP will be received ' +
                    'via AJAX request',
                showLoaderOnConfirm: true,
                preConfirm: () => {
                    return axios.post(`/posts`, {
                        body: 'this is fine'
                    })
                    .then(response => { 
                        swal.insertQueueStep({
                            type:'success',
                            title:'Successfully connected',
                            text:'you can confim the request'
                        })
                    })
                    .then(data=>{
                        this.hideModel()
                    })
                    .catch(e => {
                        swal.insertQueueStep({
                            type: 'error',
                            title: 'Unable to get your public IP'
                        })
                    })

                }
            }]);
        },
        hideModel(){
            /** Perform Some Code cleaning here */
            this.isShow=false;
        }
    },
    components: {
        FormWizard,
        TabContent
    }
}
</script>
