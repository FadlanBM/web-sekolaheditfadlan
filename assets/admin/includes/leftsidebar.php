            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <ul>
                        	<li class="menu-title">Berita</li>

                            <li class="has_sub">
                                <a href="dashboard" class="waves-effect"><i class="mdi mdi-view-dashboard"></i> <span> Dashboard </span> </a>
                         
                            </li>
<?php if($_SESSION['utype']=='1'):?>
  <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span> Sub-admins </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="add-subadmins">Tambah Sub-admin</a></li>
                                    <li><a href="manage-subadmins">Kelola Sub-admin</a></li>
                                </ul>
                            </li>
<?php endif;?>
               


                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span> Kategori </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                	<li><a href="add-category">Tambah Kategori</a></li>
                                    <li><a href="manage-categories">Kelola Kategori</a></li>
                                    <li><a href="manage-subcategories">Kelola Sub Kategori</a></li>
                                </ul>
                            </li>

                            
                            

    
  <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span> Posts (News) </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="add-post">Add Posts</a></li>
                                    <li><a href="manage-posts">Manage Posts</a></li>
                                     <li><a href="trash-posts">Trash Posts</a></li>
                                </ul>
                            </li>  
                     

                          
   <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span> Comments </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                  <li><a href="unapprove-comment">Waiting for Approval </a></li>
                                    <li><a href="manage-comments">Approved Comments</a></li>
                                </ul>
                            </li>   

                        </ul>
                        <ul>
                        <li class="menu-title"></li>
                        <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-format-list-bulleted"></i> <span>Ubah Data </span> <span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                  <li><a href="admin">Data Siswa </a></li>
                                    <li><a href="galeri">Galeri</a></li>
                                    <li><a href="data-guru">Data Guru</a></li>
                                    <li><a href="prestasi">Prestasi</a></li>
                                    <li><a href="VisiMisi">Visi Misi</a></li>
                                </ul>
                            </li>   

                        </ul>
                    </div>
                    <!-- Sidebar -->
                   

                    

                </div>
                <!-- Sidebar -left -->

            </div>