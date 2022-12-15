<template>
    <a-result status="404" title="404" sub-title="Sorry, the page you visited does not exist.">
        <template #extra>
            <router-link :to="{ name: 'home' }"> <a-button type="primary" class="text-light">Back
                    Home</a-button></router-link>
        </template>
    </a-result>
</template>
