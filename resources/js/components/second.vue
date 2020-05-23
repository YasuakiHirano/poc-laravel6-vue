<template>
    <div>
        <nav class="navbar navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Test Page</a>
        </nav>
        <div class="container mt-3">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">次のページ</div>
                        <div class="card-body">
                            テストページ！<br>
                            <router-link to="/" class="btn btn-primary">トップページ</router-link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
