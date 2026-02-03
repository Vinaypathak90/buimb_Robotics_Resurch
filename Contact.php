<?php

$page_title = isset($page_title) ? $page_title . ' | BUIMB Robotics' : 'BUIMB Robotics | Countact Us Innovation & Power';

include "header.php";

?>

<?php
// --- CONTACT HERO CONFIGURATION ---
$hero_badge     = "Get In Touch";
$hero_title_1   = "Let's Build the Future";
$hero_highlight = "Together"; // This part will be Red
$hero_desc      = "Have a research inquiry or need a custom robotics solution? Reach out to our team at BUIMB Research Labs.";
?>
<?php
// --- CONTACT INFO CONFIGURATION ---
$contact_details = [
    [
        'title' => 'Our Location',
        'text'  => 'Lamachaur, Haldwani',
        'sub'   => 'Uttarakhand, India',
        'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />'
    ],
    [
        'title' => 'Phone Number',
        'text'  => '+91 87912 18377',
        'sub'   => 'Mon-Sat, 9am - 6pm',
        'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />'
    ],
    [
        'title' => 'Email Support',
        'text'  => 'contact@buimb.com',
        'sub'   => '',
        'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />'
    ]
];

// Action Buttons
$action_buttons = [
    [
        'label' => 'WhatsApp',
        'link'  => 'https://wa.me/918791218377',
        'type'  => '_blank',
        'class' => 'bg-green-50 border-green-100 hover:bg-green-100 text-green-700',
        'icon_bg' => 'bg-green-500',
        'icon'  => '<path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372-.272.297-1.04 1.017-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z"/>'
    ],
    [
        'label' => 'Call Us',
        'link'  => 'tel:+918791218377',
        'type'  => '_self',
        'class' => 'bg-blue-50 border-blue-100 hover:bg-blue-100 text-blue-700',
        'icon_bg' => 'bg-blue-600',
        'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />'
    ],
    [
        'label' => 'Message',
        'link'  => 'sms:+918791218377',
        'type'  => '_self',
        'class' => 'bg-gray-50 border-gray-100 hover:bg-gray-100 text-gray-700',
        'icon_bg' => 'bg-gray-700',
        'icon'  => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />'
    ]
];
?>
<?php
// --- MAP SECTION CONFIGURATION ---
// You can replace this URL with your specific Google Maps Embed URL
$map_embed_url = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3480.977474495866!2d79.48972531502476!3d29.25368598217684!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39a09bdd36e4b93d%3A0x6a25e2e4e040909!2sLamachaur%2C%20Haldwani%2C%20Uttarakhand%20263139!5e0!3m2!1sen!2sin!4v1625634827418!5m2!1sen!2sin";

$hq_label    = "Headquarters";
$hq_address1 = "Lamachaur, Haldwani";
$hq_address2 = "Uttarakhand, 263139";
?>

<!--hero section-->

<section class="relative bg-white py-20 overflow-hidden">
    
    <div class="absolute inset-0 opacity-5" style="background-image: radial-gradient(#E31B23 1px, transparent 1px); background-size: 20px 20px;"></div>
    <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-buimbRed-100/50 rounded-full blur-[100px] pointer-events-none translate-x-1/2 -translate-y-1/2"></div>

    <div class="container mx-auto px-6 relative z-10 text-center">
        
        <div class="labrix-reveal slide-down inline-block py-1.5 px-4 rounded-full bg-buimbRed-50 border border-buimbRed-100 text-buimbRed-600 text-xs font-bold uppercase tracking-widest mb-4">
            <span class="w-2 h-2 rounded-full bg-buimbRed-600 inline-block mr-2 animate-pulse"></span> 
            <?php echo $hero_badge; ?>
        </div>
        
        <h1 class="labrix-reveal slide-up delay-100 text-4xl md:text-6xl font-extrabold text-buimbDark mb-6">
            <?php echo $hero_title_1; ?> <span class="text-buimbRed-600"><?php echo $hero_highlight; ?></span>
        </h1>
        
        <p class="labrix-reveal slide-up delay-200 text-buimbGray max-w-2xl mx-auto text-lg">
            <?php echo $hero_desc; ?>
        </p>

    </div>
</section>

<!--contact section-->

<section class="py-10 relative z-20">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">

            <div class="lg:col-span-5 space-y-8">
                
                <div class="labrix-reveal slide-right delay-300 bg-white p-8 rounded-3xl shadow-xl border border-gray-100">
                    <h3 class="text-2xl font-bold text-buimbDark mb-6">Contact Information</h3>
                    <div class="space-y-6">
                        <?php foreach ($contact_details as $item): ?>
                            <div class="flex items-start gap-4">
                                <div class="w-12 h-12 bg-buimbRed-50 text-buimbRed-600 rounded-full flex items-center justify-center flex-shrink-0">
                                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <?php echo $item['icon']; ?>
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-xs font-bold text-buimbGray uppercase tracking-wide"><?php echo $item['title']; ?></p>
                                    <p class="text-lg font-bold text-buimbDark"><?php echo $item['text']; ?></p>
                                    <?php if ($item['sub']): ?>
                                        <p class="text-buimbGray text-sm"><?php echo $item['sub']; ?></p>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="labrix-reveal slide-up delay-400 grid grid-cols-3 gap-4">
                    <?php foreach ($action_buttons as $btn): ?>
                        <a href="<?php echo $btn['link']; ?>" target="<?php echo $btn['type']; ?>" class="flex flex-col items-center justify-center p-4 rounded-2xl border transition-all group <?php echo $btn['class']; ?> hover:shadow-md">
                            <div class="w-10 h-10 rounded-full flex items-center justify-center text-white mb-2 shadow-md group-hover:scale-110 transition-transform <?php echo $btn['icon_bg']; ?>">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                                    <?php echo $btn['icon']; ?>
                                </svg>
                            </div>
                            <span class="text-xs font-bold"><?php echo $btn['label']; ?></span>
                        </a>
                    <?php endforeach; ?>
                </div>

            </div>

            <div class="lg:col-span-7">
                <div class="labrix-reveal slide-left delay-500 bg-white p-8 md:p-10 rounded-3xl shadow-2xl border border-gray-100">
                    <h3 class="text-2xl font-bold text-buimbDark mb-2">Send us a Message</h3>
                    <p class="text-buimbGray text-sm mb-8">Fill out the form below and our team will get back to you within 24 hours.</p>

                    <form id="contactForm" class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label class="block text-sm font-bold text-buimbDark mb-2">Full Name</label>
                                <input type="text" name="full_name" placeholder="John Doe" required class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-buimbRed-600 focus:ring-1 focus:ring-buimbRed-600 outline-none transition-all bg-gray-50 focus:bg-white text-gray-700">
                            </div>
                            <div>
                                <label class="block text-sm font-bold text-buimbDark mb-2">Phone</label>
                                <input type="tel" name="phone" placeholder="+91 000 000 0000" class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-buimbRed-600 focus:ring-1 focus:ring-buimbRed-600 outline-none transition-all bg-gray-50 focus:bg-white text-gray-700">
                            </div>
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-buimbDark mb-2">Email Address</label>
                            <input type="email" name="email" placeholder="john@example.com" required class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-buimbRed-600 focus:ring-1 focus:ring-buimbRed-600 outline-none transition-all bg-gray-50 focus:bg-white text-gray-700">
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-buimbDark mb-2">Subject</label>
                            <select name="subject" class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-buimbRed-600 focus:ring-1 focus:ring-buimbRed-600 outline-none transition-all bg-gray-50 focus:bg-white text-gray-700">
                                <option value="General Inquiry">General Inquiry</option>
                                <option value="Research Collaboration">Research Collaboration</option>
                                <option value="Career Opportunity">Career Opportunity</option>
                                <option value="Industrial Automation">Industrial Automation</option>
                            </select>
                        </div>
                        <div>
                            <label class="block text-sm font-bold text-buimbDark mb-2">Your Message</label>
                            <textarea name="message" rows="4" placeholder="How can we help you?" required class="w-full px-4 py-3 rounded-lg border border-gray-200 focus:border-buimbRed-600 focus:ring-1 focus:ring-buimbRed-600 outline-none transition-all bg-gray-50 focus:bg-white resize-none text-gray-700"></textarea>
                        </div>
                        <button type="submit" class="w-full bg-buimbRed-600 text-white font-bold py-4 rounded-xl hover:bg-buimbDark transition-all duration-300 shadow-lg shadow-red-200 hover:shadow-gray-300 flex justify-center items-center gap-2 group">
                            <span>Send Message</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 transform group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                            </svg>
                        </button>
                    </form>
                    
                    <div id="successMessage" class="hidden mt-4 p-4 bg-green-50 border border-green-100 rounded-xl text-center">
                        <p class="text-green-700 font-bold">Message Sent Successfully!</p>
                        <p class="text-green-600 text-sm">Thank you for reaching out. We will call you at <span class="font-bold">87912 18377</span> shortly.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<!--Map Section -->

<section class="h-[450px] w-full bg-gray-200 relative labrix-reveal slide-up delay-200">
    <iframe 
        src="<?php echo $map_embed_url; ?>" 
        width="100%" 
        height="100%" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade">
    </iframe>
    
    <div class="absolute bottom-6 left-6 bg-white p-5 rounded-2xl shadow-xl border border-gray-100 max-w-xs animate-float z-10">
        <div class="flex items-center gap-3 mb-2">
            <span class="w-2 h-2 rounded-full bg-buimbRed-600 animate-pulse"></span>
            <p class="text-xs font-bold text-buimbRed-600 uppercase tracking-wider">
                <?php echo $hq_label; ?>
            </p>
        </div>
        <p class="font-bold text-buimbDark text-lg leading-tight">
            <?php echo $hq_address1; ?>
        </p>
        <p class="text-buimbGray text-sm">
            <?php echo $hq_address2; ?>
        </p>
    </div>
</section>

<!--Footer-->
<?php
include "footer.php";
?>
<!--Scripts-->
<script src="contact.js"></script>
<script src="main.js"></script>