<template>
    <div id="main">
        <nav class="main-nav">
            <router-link :to="{ name: 'index' }">Go to Index</router-link>
            <router-link :to="{ name: 'login' }">Login</router-link>
            <a href="javascript:void(0);" v-on:click="handleLogout()">Logout</a>
            <router-link :to="{ name: 'user' }">Member Info</router-link>
        </nav>

        <main class="main-content">
            <transition name="slide">
                <router-view></router-view>
            </transition>
        </main>
    </div>
</template>
<script>
    import {logoutUrl} from './config'

    export default {
        methods: {
            handleLogout(){
                axios.post(logoutUrl, {}, {
                    headers: {
                        'Accept': 'application/json',
                        'Accept-language': 'en_US',
                        'Authorization': 'Bearer ' + localStorage.getItem('access_token')
                    },
                })
                  .then(function (response) {
                    console.log(response)
                    if(response.status == 200){
                        alert('Logout Ok')
                        localStorage.clear()
                        router.push({name: 'index'})
                    } else {
                        alert('Error')
                    }
                  })
                  .catch(function (error) {
                    alert(error);
                  });
            }
        }
    }
</script>
