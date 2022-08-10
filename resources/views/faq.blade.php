@extends('layouts.frontend')

@section('nav')
@includeIf('layouts.nav')
@endsection

@section('breadcrumb')
@includeIf('layouts.breadcrumb', ['title' => 'Frequently Asked Questions', 'subtitle' => 'FAQ'])
@endsection

@section('page-content')
<!-- Start FAQ Area -->
<div class="faq-area ptb-100">
    <div class="container">
        <div class="faq-accordion accordion" id="faqAccordion">
            <div class="accordion-item">
                <button class="accordion-header accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Why Study in the United Kingdom?
                </button>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        <p>Actually, there are a number of reasons but let's mention a few.  First, their courses are shorter and more intensive. Second, your degree will be respected anywhere in the world. Lastly, you can boast of a rock-solid foundation for success in your career.</p>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <button class="accordion-header accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    How Good Is the Education System in the United Kingdom?
                </button>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        <p>Compared to many other countries, UK's commitment to quality education is top-notch.</p> 
                        <p>They have inspiring teaching methods, state-of-the-art facilities, and outstanding research exoosure. 
                        Also, their courses are high-quality and will adequately prepare you for your desired employment. </p>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <button class="accordion-header accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                    How much does it cost to study in the United Kingdom?
                </button>
                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        <p>To study in the UK, the tuition cost most times fall within the range of £12594.46 to £18521.26 each academic year.</p>    
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <button class="accordion-header accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                    Can I get a tuition discount?
                </button>
                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        <p>Of course you can get some good amount yanked off your tuition. Speak with one of our experts work out something specific for you (link). </p>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <button class="accordion-header accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                    Is it possible to study in the United Kingdom without taking the IELTS exam?
                </button>
                <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        <p>It's not compulsory you take IELTS before you study in the United Kingdom. However, if you do not have IELTS, you must meet a few prerequisites and restrictions while applying to UK universities.</p> 
                        <p>So, it's advisable you have IELTS. If you are still contemplating, please contact us for clarity.</p> 
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <button class="accordion-header accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                    Is it necessary for me to have health insurance in the United Kingdom?
                </button>
                <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        <p>Your health is a priority in the UK and to cover for your medical bills, you need to secure a health insurance before you make entry into the United Kingdom as a student.</p>    
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <button class="accordion-header accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                    What are the greatest courses to study in the United Kingdom?
                </button>
                <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        <p>There are a variety of amazing courses to study in the UK. From engineering to biological science and from education to corporate management. The choices are widespread and you need to carefully consider what path you should follow.</p> 
                        <p>As a result, we will walk you through on the best option and the right university for your choice. Talk to us for free.</p>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <button class="accordion-header accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
                    What examinations are required to study in the United Kingdom?
                </button>
                <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        <p>Depending on your course, university and intending degree, you may be required to take GMAT or IELTS or even both to gain admission into a university in the UK.</p> 
                        <p>Contact us to learn more about what's best for you.</p> 
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <button class="accordion-header accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="true" aria-controls="collapseNine">
                    Can I work in the UK with my student visa?
                </button>
                <div id="collapseNine" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        <p>Yes, as an international student you can work with a student visa. But note that you are only permitted to work up to 20 hours per week during term time and full-time when the school is on break.</p> 
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <button class="accordion-header accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="true" aria-controls="collapseTen">
                    Can I study in the UK with a scholarship?
                </button>
                <div id="collapseTen" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        <p>Yes, you can. Some universities in the UK offer scholarships for international students to cover up their tuition fees. We will guide you on.</p> 
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <button class="accordion-header accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="true" aria-controls="collapseEleven">
                    What is the health insurance like in the UK?
                </button>
                <div id="collapseEleven" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        <p>If your visa is a tier 4 student visa and you will be studying in the UK for not less than six (6) months, then you may be eligible for the same NHS benefits as UK nationals.</p>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <button class="accordion-header accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwelve" aria-expanded="true" aria-controls="collapseTwelve">
                    What is the health insurance like in the UK?
                </button>
                <div id="collapseTwelve" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        <p>If your visa is a tier 4 student visa and you will be studying in the UK for not less than six (6) months, then you may be eligible for the same NHS benefits as UK nationals.</p>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <button class="accordion-header accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirteen" aria-expanded="true" aria-controls="collapseThirteen">
                    How much bank balance must I have before I'm issued a UK student visa?
                </button>
                <div id="collapseThirteen" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        <p>As a newly admitted student into a UK university, it is important you present a 28-day bank statement which covers 9 months of living expenses as well as tuition costs balance.</p> 
                        <p>Basically, your account should ahow £1,265 per month as a living expense. </p>   
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <button class="accordion-header accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourteen" aria-expanded="true" aria-controls="collapseFourteen">
                    Is medical test required for my UK student visa?
                </button>
                <div id="collapseFourteen" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        <p>A UK government certified medical test from a UKVI-listed hospital is required for your CAS application.</p>    
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <button class="accordion-header accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFifteen" aria-expanded="true" aria-controls="collapseFifteen">
                    How long does it take for UK student visa?
                </button>
                <div id="collapseFifteen" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        <p>First, a student visa application usually takes 15 working days to process. Therefore, after admission, it can take some 30 to 40 days before you receive your visa.</p>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <button class="accordion-header accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSixteen" aria-expanded="true" aria-controls="collapseSixteen">
                    Is interview compulsory for UK student visa?
                </button>
                <div id="collapseSixteen" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        <p>Almost all the universities in the UK usually conduct an interview before confirming your admission which also aids your student visa approval.</p>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <button class="accordion-header accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeventeen" aria-expanded="true" aria-controls="collapseSeventeen">
                    What is the academic calendar for universities in the United Kingdom?
                </button>
                <div id="collapseSeventeen" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        <p>Usually, academic year commences in September or October and ends in June or July. For postgraduates, academic year starts in September and end in September.</p> 
                        <p>Note: other programmes can have different start dates and conclusion period.</p>    
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <button class="accordion-header accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEighteen" aria-expanded="true" aria-controls="collapseEighteen">
                    Is it possible stay back in the UK at the end of my studies?
                </button>
                <div id="collapseEighteen" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        <p>  Prolonging your stay in the UK once you wrap up your programme depends on your type of employment, term of stay and Visa status.</p> 
                        <p>Staying back after your studies might require you to apply for a visa extension or a work visa in the UK.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End FAQ Area -->
@endsection