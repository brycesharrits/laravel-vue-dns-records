<template>
    <div class="container">
        <header>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <div class="px-3 py-2 bg-dark text-white">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <router-link to="/" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
                    <img src="https://laraveltuts.com/wp-content/uploads/2022/06/logo-dark.webp" style="height:60px;"/>
                </router-link>
                <p>Show DNS Records</p>
                <ShowDnsRecords />
                </div>
            </div>
            </div>
        </header>
    </div>
</template>
<script>
import ShowDnsRecords from './ShowDnsRecords.vue';

export default {
    name: 'App',
    components: { ShowDnsRecords }
}
</script>