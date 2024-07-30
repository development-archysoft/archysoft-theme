<div class="content_list">
    <h2 class="content_list_title">Table of Contents</h2>
    <?php the_sub_field('ancord_content'); ?>
</div>
<style>
.content_list_title{
    font-weight: 600;
    font-size: 32px;
    line-height: 150%;
    color: #000;
    margin: 20px 0 20px;
}
.content_list {
    margin-bottom: 40px;
}
.content_list ol {
    display: flex;
    flex-direction: column;
    gap: 10px;
}
.content_list ol li {
    padding-left: 20px;
    position: relative;
    width: max-content;
}
.content_list ol li:hover::after{
    transition-duration: 1s;
    color: #000;
}
.content_list ol li::after{
    content: counter(list-item) ".";
    position: absolute;
    left: 0;
    top: 0;
    color: #BFC1C5;
    font-size: 16px;
    line-height: 130%;
    font-weight: 500;
    transition-duration: 1s;
}
.content_list ol li:hover a{
    color: #000;
    transition-duration: 1s;
}
.content_list ol li a{
    color: #BFC1C5;
    font-size: 16px;
    line-height: 130%;
    font-weight: 500;
    transition-duration: 1s;
}
@media screen and (max-width: 992px){
    .content_list ol li {
    width: 100%;
}
.content_list ol li a{
    line-height: 100%;
}
.content_list {
    margin-bottom: 20px;
}
}
@media screen and (max-width: 768px){
    .content_list_title{
        font-size: 26px;
        margin: 15px 0;
    }
}
@media screen and (max-width: 576px){
    .content_list_title{
        font-size: 20px;
        margin: 10px 0;
    }
}
@media screen and (max-width: 375px){
    .content_list ol li a{
        font-size: 14px;
    }
}
</style>