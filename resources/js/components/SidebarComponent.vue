<template>
    <div id="sidebar-nav" class="sidebar">
                <div class="sidebar-scroll">
                    <nav>
                        <ul class="nav">
                            <li><router-link to="/dashboard"><i class="lnr lnr-home"></i> <span>Dashboard</span></router-link>
                            </li>

                            <li>
                                <router-link to="/user"  href="#">
                                <i class="lnr lnr-file-empty"></i> 
                                <span>Perfil Usuario</span> 
                                </router-link>
                                
                            </li>

                        </ul>
                    </nav>
                </div>
            </div>
</template>

<script>
    export default {
        
    }
</script>

<style lang="scss" scoped>

</style>