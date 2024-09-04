<template>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <router-link class="nav-link active" :to="{ name: 'home' }">home</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link class="nav-link active" :to="{ name: 'about' }">about</router-link>
                    </li>
                    <li class="nav-item">
                        <router-link class="nav-link active" :to="{ name: 'hotel.index' }">hotel</router-link>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main>
        <router-view></router-view>
    </main>
</template>
