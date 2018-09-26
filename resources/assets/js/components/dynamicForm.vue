<template>
    <div id="exampleModal" tabindex="1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade show " style="display: block;">
        <div role="document" class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 id="exampleModalLabel" class="modal-title">Modal title</h5>
                    <button type="button" data-dismiss="modal" aria-label="Close" class="close">
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

                        <form class="wizard-form steps-basic" action="#" data-fouc>
                            <h6>Your experience</h6>
                            <fieldset>
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
                            </fieldset>
                            <h6>Additional info</h6>
                            <fieldset v-if="paymentMethod!='cash'">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="d-block">Applicant resume:</label>
                                            <input type="file" name="resume" class="form-input-styled" data-fouc>
                                            <span class="form-text text-muted">Accepted formats: pdf, doc. Max file size 2Mb</span>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Where did you find us?</label>
                                            <select name="source" data-placeholder="Choose an option..." class="form-control form-control-select2" data-fouc>
                                                <option></option> 
                                                <option value="monster">Monster.com</option> 
                                                <option value="linkedin">LinkedIn</option> 
                                                <option value="google">Google</option> 
                                                <option value="adwords">Google AdWords</option> 
                                                <option value="other">Other source</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Availability:</label>
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="radio" name="availability" class="form-input-styled" data-fouc>
                                                    Immediately
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="radio" name="availability" class="form-input-styled" data-fouc>
                                                    1 - 2 weeks
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="radio" name="availability" class="form-input-styled" data-fouc>
                                                    3 - 4 weeks
                                                </label>
                                            </div>

                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input type="radio" name="availability" class="form-input-styled" data-fouc>
                                                    More than 1 month
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Additional information:</label>
                                            <textarea name="additional-info" rows="5" cols="5" placeholder="If you want to add any info, do it here." class="form-control"></textarea>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset v-if="paymentMethod==='cash'">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Company:</label>
                                            <input type="text" name="experience-company" placeholder="Company name" class="form-control">
                                        </div>

                                        <div class="form-group">
                                            <label>Position:</label>
                                            <input type="text" name="experience-position" placeholder="Company name" class="form-control">
                                        </div>

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
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Brief description:</label>
                                            <textarea name="experience-description" rows="4" cols="4" placeholder="Tasks and responsibilities" class="form-control"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label class="d-block">Recommendations:</label>
                                            <input name="recommendations" type="file" class="form-input-styled" data-fouc>
                                            <span class="form-text text-muted">Accepted formats: pdf, doc. Max file size 2Mb</span>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            {{paymentMethod}}
                        </form>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</template>
<script>

export default {
    data(){
        return {
            paymentMethod:'cash'
        }
    },
    mounted () {
    }
}
</script>
