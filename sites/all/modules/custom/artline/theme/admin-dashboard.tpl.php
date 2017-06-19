<?php
/**
 * Created by PhpStorm.
 * User: nhan
 * Date: 11/23/16
 * Time: 11:33 PM
 */
global $user;
?>
<div id="admin-panel">
    <h2>Quản lý sản phẩm và nội dung bài viết</h2>
    <ul>
        <li class="manage"><a href="/admin/content">Nội dung bài viết</a></li>
        <li class="manage"><a href="/admin/commerce/products">Sản phẩm</a></li>
        <li class="manage"><a href="/admin/structure/taxonomy/category">Danh mục sản phẩm</a></li>
        <li class="manage"><a href="/admin/structure/taxonomy/color">Màu sắc</a></li>
        <li class="manage"><a href="/admin/commerce/orders">Đơn hàng</a></li>
        <li class="manage"><a href="/admin/commerce/config/shipping">Chức năng giao hàng</a></li>
        <li class="manage"><a href="/admin/commerce/config/payment-methods">Chức năng thanh toán</a></li>
        <li class="manage"><a href="/admin/config/system/site-information">Cấu hình thông tin store</a></li>
        <li class="manage"><a href="/admin/structure/block/manage/block/7/configure?destination=admin/dashboard">Quản lý Free shipping block </a></li>
        <li class="manage"><a href="/admin/structure/block/manage/block/9/configure?destination=admin/dashboard">Quản lý Order online block</a></li>
        <li class="manage"><a href="/admin/structure/block/manage/block/8/configure?destination=admin/dashboard">Quản lý Send a Gift Block</a></li>
        <li class="manage"><a href="/admin/structure/menu/manage/menu-footer-navigation">Quản lý Menu Footer</a></li>
        <li
    </ul>
</div>
<div id="admin-panel">

    <h2>Thêm nội dung và sản phẩm</h2>
    <ul>
        <li class="add"><a href="/node/add/page">Thêm trang mới</a></li>
        <li class="add"><a href="/node/add/slideshow">Thêm slideshow banner</a></li>
        <li class="add"><a href="/node/add/tops">Thêm sản phẩm</a></li>
        <li class="add"><a href="/admin/structure/taxonomy/color/add"> Thêm màu sắc</a></li>
        <li class="add"><a href="/admin/structure/taxonomy/category/add"> Thêm danh mục sản phẩm</a></li>
    </ul>
</div>
<div id="admin-panel">

    <h2>Cấu hình website</h2>
    <ul>
        <?php if(in_array('admin', $user->roles) || in_array('administrator',$user->roles)): ?>
            <li class="user-logout"><a href="/admin/appearance/settings/artline_store">Thay đổi giao diện, logo, favicon</a></li>
            <li class="user-logout"><a href="/admin/config/system/googleanalytics">Quản lý google analytics</a></li>

        <?php endif; ?>
<!--        <li class="user-logout"><a href="/admin/appearance/settings/artline_store">Thay đổi logo và Favicon </a></li>-->
        <li class="user-logout"><a href="/admin/config/content/artline">Quản lý fanpage</a></li>
        <li class="user-logout"><a href="/admin/structure/block/manage/block/10/configure?destination=admin/dashboard">Quản lý nội dung liên hệ</a></li>
        <li class="user-logout"><a href="/admin/structure/block/manage/block/3/configure?destination=admin/dashboard">Quản lý logo Bộ Công Thương</a></li>
        
        <li class="user-logout"><a href="/user/logout">Đăng xuất</a></li>
    </ul>
</div>


