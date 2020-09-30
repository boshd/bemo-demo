<template>
    <div>
        <header_></header_>
        <banner></banner>
        <div class="main">
            <div class="mission-container">
                <!-- <div class="mission-design-container-inner"></div> -->

                <div class="mission-container-inner">
                    {{ main_body }}
                </div>
            </div>
        </div>
        <footer_></footer_>
    </div>
</template>

<script>
export default {
    props: ["main_body"]
};
</script>
