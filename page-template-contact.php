<?php get_header(); ?>
<?php 
/**
 * Serviсes page.
 * 
 * Template Name: Contacts
 * 
 * @package Archysoft
 */
?>
<style>
      <?php include 'assets/style/contact.css'; ?>
</style>
<section class="contacts">
    <div class="container">
        <h1>
            Contact us
        </h1>
        <h2>
            Feel free to comunicate with us
        </h2>
        <div class="contacts_wrapper">
            <div class="contact_form_wrapper">
<!--                <form enctype="multipart/form-data" method="POST" class="contact_form">-->
<!--                <input type="hidden" name="form_id" value="contacts_form">-->
<!--                    <label>-->
<!--                        <input name="name" type="text" required="" placeholder="Name/Last Name">-->
<!--                    </label>-->
<!--                    <label>-->
<!--                        <input name="email" type="email" required="" placeholder="Email" pattern="\S+@[a-z]+.[a-z]+">-->
<!--                    </label>-->
<!--                    <textarea name="message" required="" placeholder="Description"></textarea>-->
<!--                    <input class="contact_submit btn" type="submit" value="Submit">-->
<!--                 </form>-->
                <?php echo do_shortcode('[hubspot type="form" portal="25327294" id="b80652fa-2f89-49d1-9e14-01d91ec042e2"]') ?>

                 <div class="feedback_title">We’ll get back to you in 1-2 business days.</div>
            </div>
            <div class="iframe_container">
                <div class="ifarame_wrapper">
                    <iframe title="Google maps" class="lozad" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2540.5685305948114!2d30.417104076963152!3d50.44913697159204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40d4cc15566abc7f%3A0x7d4d35461792691e!2sMykoly%20Vasylenka%20St%2C%207%D0%B0%2C%20Kyiv%2C%2002000!5e0!3m2!1sen!2sua!4v1715051774565!5m2!1sen!2sua" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <ul class="contact_window">
                    <?php 
                    $phone = get_field('phone', 'option');
                    $email = get_field('email', 'option');
                    $adress = get_field('adress', 'option');
                    if(!empty($phone)): ?>
                    <li>
                        <a href="tel:<?php echo format_phone_number($phone) ?>">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21.6401 16.3468L18.2534 15.9601C17.8552 15.9133 17.4515 15.9574 17.0728 16.089C16.6941 16.2207 16.3501 16.4364 16.0667 16.7201L13.6134 19.1734C9.82831 17.2484 6.75176 14.1718 4.82672 10.3868L7.29339 7.9201C7.86672 7.34676 8.14672 6.54676 8.05339 5.73343L7.66672 2.37343C7.59113 1.723 7.27898 1.12308 6.7897 0.687893C6.30043 0.252708 5.6682 0.0126514 5.01339 0.0134296H2.70672C1.20005 0.0134296 -0.0532791 1.26676 0.0400542 2.77343C0.746721 14.1601 9.85339 23.2534 21.2267 23.9601C22.7334 24.0534 23.9867 22.8001 23.9867 21.2934V18.9868C24.0001 17.6401 22.9867 16.5068 21.6401 16.3468Z" fill="#BF1422"/>
                        </svg>
                            <?php echo $phone; ?>
                        </a>
                    </li>
                    <?php endif; ?>
                    <?php if(!empty($email)): ?>
                    <li>
                        <a href="mailto:<?php echo $email; ?>">
                        <svg width="28" height="22" viewBox="0 0 28 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M27.3337 5.04663V17.6666C27.3337 18.6869 26.9439 19.6687 26.2439 20.411C25.544 21.1533 24.5869 21.6001 23.5683 21.66L23.3337 21.6666H4.66699C3.64671 21.6667 2.66497 21.2769 1.92264 20.5769C1.18032 19.877 0.733515 18.9198 0.673659 17.9013L0.666992 17.6666V5.04663L13.2603 13.4426L13.415 13.5306C13.5973 13.6197 13.7975 13.666 14.0003 13.666C14.2032 13.666 14.4034 13.6197 14.5857 13.5306L14.7403 13.4426L27.3337 5.04663Z" fill="#BF1422"/>
                            <path d="M23.3341 0.333252C24.7741 0.333252 26.0367 1.09325 26.7407 2.23592L14.0007 10.7293L1.26074 2.23592C1.59513 1.69302 2.05446 1.23792 2.60044 0.908571C3.14641 0.579223 3.76321 0.385168 4.39941 0.342585L4.66741 0.333252H23.3341Z" fill="#BF1422"/>
                        </svg>
                        <?php echo $email; ?>
                        </a>
                    </li>
                    <?php endif; ?>
                    <?php if(!empty($adress)): ?>
                    <li>
                      <p>
                      <svg width="22" height="28" viewBox="0 0 22 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M11 0C8.08368 0.00344047 5.28779 1.16347 3.22563 3.22563C1.16348 5.28778 0.00344738 8.08367 6.90418e-06 11C-0.00267443 13.3831 0.775714 15.7014 2.21601 17.6C2.21601 17.6 2.51601 17.995 2.56501 18.052L11 28L19.439 18.047C19.483 17.994 19.784 17.6 19.784 17.6L19.785 17.597C21.2243 15.6991 22.0023 13.382 22 11C21.9966 8.08367 20.8365 5.28778 18.7744 3.22563C16.7122 1.16347 13.9163 0.00344047 11 0ZM11 15C10.2089 15 9.43552 14.7654 8.77773 14.3259C8.11993 13.8864 7.60724 13.2616 7.30449 12.5307C7.00174 11.7998 6.92252 10.9956 7.07687 10.2196C7.23121 9.44371 7.61217 8.73098 8.17158 8.17157C8.73099 7.61216 9.44372 7.2312 10.2196 7.07686C10.9956 6.92252 11.7998 7.00173 12.5307 7.30448C13.2616 7.60723 13.8864 8.11992 14.3259 8.77772C14.7654 9.43552 15 10.2089 15 11C14.9987 12.0605 14.5768 13.0771 13.827 13.827C13.0771 14.5768 12.0605 14.9987 11 15Z" fill="#BF1422"/>
                        </svg>
                        <?php echo $adress; ?>
                      </p>
                    </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
        <button class="book" onclick="window.open('https://calendly.com/archysoft/30min', '_blank');return true;">
            Book a call
            <svg xmlns="http://www.w3.org/2000/svg" width="13" height="12" viewBox="0 0 13 12" fill="none"><path d="M4.07582 1.22704L11.5004 1.22704M11.5004 1.22704L11.5004 8.65166M11.5004 1.22704L1.9545 10.773" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
        </button>
    </div>
</section>
<div class="comment_ok">
    Thank you for your message. It has been sent.
</div>
<!--<script>-->
<!--let leave_feedback_submit = document.querySelector('.contact_submit');-->
<!--let leave_feedback_form = document.querySelector('.contact_form');-->
<!--let leave_feedback_input = document.querySelectorAll('.contact_form *:not(label)');-->
<!--let feedback_title = document.querySelector('.comment_ok');-->
<!---->
<!--leave_feedback_submit.addEventListener('click', function(e) {-->
<!--    let error = false;-->
<!--    for (let i = 0; i < leave_feedback_input.length; i++) {-->
<!--        if (leave_feedback_input[i].value.length == 0) {-->
<!--            error = true;-->
<!--        }-->
<!--    }-->
<!--    if (!error) {-->
<!--        e.preventDefault();-->
<!--        let data = new FormData(leave_feedback_form);-->
<!--        fetch('/wp-content/themes/archysoft/send.php', {-->
<!--            method: "POST",-->
<!--            body: data-->
<!--        })-->
<!--        .then(data => {-->
<!--            if (data.ok == true) {-->
<!--                leave_feedback_form.reset();-->
<!--                feedback_title.classList.add('feedback_title_active');-->
<!--                setTimeout(() => {-->
<!--                    feedback_title.classList.remove('feedback_title_active');-->
<!--                }, 2000);-->
<!--            }-->
<!--        })-->
<!--    }-->
<!--});-->
<!---->
<!--</script>-->
<?php get_footer(); ?>