<script setup>
import { ref } from 'vue';
import { Inertia } from '@inertiajs/inertia';
import { Head, Link } from '@inertiajs/inertia-vue3';
import ApplicationMark from '@/Components/ApplicationMark.vue';
import Banner from '@/Components/Banner.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';

defineProps({
    title: String,
});

const showingNavigationDropdown = ref(false);

const switchToTeam = (team) => {
    Inertia.put(route('current-team.update'), {
        team_id: team.id,
    }, {
        preserveState: false,
    });
};

const logout = () => {
    Inertia.post(route('logout'));
};

const home = () => {
    Inertia.get(route('dashboard'));
};

const upload = () => {
    Inertia.get(route('vocem.uploadView'));
};

const profileLink = () => {
    Inertia.get(route('profile.show'));
};
</script>

<template>
    <div>
        <Head :title="title" />

        <Banner />
        <div class="q-pa-md">
            <q-toolbar class="bg-primary glossy text-white">
                <img src="img/previsegura-logo.jpg" style='width:10%;' alt="">  
                <q-toolbar-title>Previsegura panel administrativo</q-toolbar-title>
                <q-space/>
                <q-tabs v-model="tab" shrink>
                    <q-tab name="tab1">
                        <q-btn flat round dense icon="home" @click="home" />
                    </q-tab>
                    <q-tab name="tab1">
                        <q-btn flat round dense icon="upload" @click="upload" />
                    </q-tab>
                    <q-tab name="tab1">
                        <q-btn flat round dense icon="person" @click="profileLink" />
                    </q-tab>
                    
                    <q-tab name="tab2">
                        <q-btn flat round dense icon="logout" @click="logout" />
                    </q-tab>
                </q-tabs>
            </q-toolbar>
        </div>
        <div class="min-h-screen bg-gray-100">

            <!-- Page Heading -->
            <header v-if="$slots.header" class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <slot name="header" />
                </div>
            </header>

            <!-- Page Content -->
            <main>
                <slot />
            </main>
        </div>
    </div>
</template>
