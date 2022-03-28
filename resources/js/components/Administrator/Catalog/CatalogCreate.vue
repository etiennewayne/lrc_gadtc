<template>
  <div>
    <div class="section">
        <div class="columns is-centered">
                <div class="column is-10">
                    <div class="box">
                        <b-breadcrumb
                            separator="has-arrow-separator"
                            align="is-right"
                            size="is-medium"
                        >
                            <b-breadcrumb-item href="/catalog">Catalog</b-breadcrumb-item>
                            <b-breadcrumb-item href="/catalog/create">Create</b-breadcrumb-item>

                        </b-breadcrumb>


                        <div class="is-flex is-justify-content-center mb-2" style="font-size: 20px; font-weight: bold;">CREATE CATALOG</div>

                        <b-tabs position="is-right" type="is-boxed">
                            <b-tab-item label="Title">
        
                                <h2 class="my-5"><span>TITLE INFORMATION</span></h2>

                                <b-field grouped label="Title" expanded>
                                    <b-field>
                                        <b-input type="text" v-model="fields.title_1" placeholder="Title"></b-input>
                                    </b-field>
                                    <b-field expanded>
                                         <b-input type="text" v-model="fields.title_2" placeholder="Title"></b-input>
                                    </b-field>
                                </b-field>
                                
                                <b-field label="Subtitle">
                                    <b-input type="text" v-model="fields.subtitle" placeholder="Subtitle"></b-input>
                                </b-field>

                                <b-field label="Authors">
                                    <b-input type="text" fields.title_author placeholder="Authors"></b-input>
                                </b-field>

                                <b-field label="Edition">
                                    <b-input type="text" v-model="fields.edition" placeholder="Edition"></b-input>
                                </b-field>
                                
                                <h2 class="my-5"><span>STANDARD NUMBERS</span></h2>

                                <b-field grouped>
                                    <b-field label="LCCN" horizontal>
                                        <b-input type="text" v-model="fields.lccn" placeholder="LCCN"></b-input>
                                    </b-field>
                                    <b-field label="ISBN" horizontal>
                                        <b-input type="text" v-model="fields.isbn" placeholder="ISBN"></b-input>
                                    </b-field>
                                    <b-field label="ISSN" horizontal>
                                        <b-input type="text" v-model="fields.issn" placeholder="ISSN"></b-input>
                                    </b-field>
                                </b-field>

                                <b-field grouped>
                                    <b-field label="Material Type" horizontal>
                                        <b-select v-model="fields.material_type" placeholder="Material Type">
                                            <option v-for="(item, index) in materialTypes" :key="index" :value="item.material_type">{{ item.material_type }}</option>
                                        </b-select>
                                    </b-field>

                                    <b-field label="Subtype" horizontal>
                                        <b-select v-model="fields.material_subtype" placeholder="Subtype">
                                            <option value="" selected>No Subtype Assigned</option>
                                        </b-select>
                                    </b-field>

                                </b-field>

                                <h2 class="my-5"><span>AUTHOR</span></h2>

                                <b-field label="Name">
                                    <b-input type="text" v-model="fields.author_name" placeholder="Name"></b-input>
                                </b-field>
                                <b-field label="Dates">
                                    <b-input type="text" v-model="fields.author_dates" placeholder="Dates"></b-input>
                                </b-field>
                            
                                <h2 class="my-5"><span>PUBLICATION INFORMATION</span></h2>
                                
                                <b-field label="Place">
                                    <b-input type="text" v-model="fields.pub_place" placeholder="Place"></b-input>
                                </b-field>
                                <b-field label="Publisher">
                                    <b-input type="text" v-model="fields.publisher" placeholder="Publisher"></b-input>
                                </b-field>
                                <b-field label="Date">
                                    <b-input type="text" v-model="fields.publisher_date" placeholder="Date"></b-input>
                                </b-field>
                                <b-field label="Copyright">
                                    <b-input type="text" v-model="fields.publisher_copyright" placeholder="Copyright"></b-input>
                                </b-field>

                                <h2 class="my-5"><span>PHYSICAL DESCRIPTION</span></h2>

                                <b-field label="Extent">
                                    <b-input type="text" v-model="fields.extent" placeholder="Extent"></b-input>
                                </b-field>
                                <b-field label="Other Details">
                                    <b-input type="text" v-model="fields.other_details" placeholder="Other Details"></b-input>
                                </b-field>
                                <b-field label="Size">
                                    <b-input type="text" v-model="fields.size" placeholder="Size"></b-input>
                                </b-field>
                                

                            </b-tab-item>
                            <b-tab-item label="Series/Notes">
                                
                            </b-tab-item>
                            <b-tab-item label="Subjects"></b-tab-item>
                            <b-tab-item label="Resources"></b-tab-item>
                            <b-tab-item label="Added Entries"></b-tab-item>
                            <b-tab-item label="RDA Types"></b-tab-item>
                        </b-tabs>


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
            fields: {},
            errors: {},

            materialTypes: [],
        }
    },
    methods: {

        loadMaterialTypes(){
            axios.get('/load-catalog-material-types').then(res=>{
                this.materialTypes = res.data;
            })
        }
    },

    mounted(){
        this.loadMaterialTypes();
    }
}
</script>

<style>
    .title-input{
        width: 150px;
    }
</style>