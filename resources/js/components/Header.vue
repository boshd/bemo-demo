<template>
    <div>
        <nav class="nav">
            <nav class="nav-container">
                <div class="brand">

                        <img
                            src="/bemo-logo.png"
                            class="favicon"
                            alt="Bemo"
                        />

                </div>
                <div class="links">
                    <router-link
                        class="links"
                        v-for="routes in links"
                        v-bind:key="routes.id"
                        :to="`${routes.page}`"
                        >{{ routes.text }}</router-link
                    >
                </div>
            </nav>
        </nav>
    </div>
</template>

<script>
export default {
    name: "Navigation",
    data() {
        return {
            links: [
                {
                    id: 0,
                    text: "Welcome",
                    page: "/"
                },
                {
                    id: 1,
                    text: "Contact Us",
                    page: "/contact"
                }
            ]
        };
    }
};
</script>

<style></style>
