<?php require 'header.php'; ?>


<body>
<header>
<a href="index.php">
    <img src="Images/globe-white.jpg" alt="Logo" width="65px" height="65px">  
</a>   
    <div class="logo"><span class="highlight"> E-VISA PROCESSING </span> & Follow Up System</div>
<nav>
<?php 
    if (isset($_SESSION['uId'])) {
        echo "<a href='application.php' class='mybutton'>Application</a>";
    }
    else {
        echo "<a href='signup.php' class='mybutton'>Signup</a>";
    }
    ?>
    <a href="about-evisa.php" class="mybutton">About E-Visa</a>
    <a href="faq.php" class="active-mybutton">FAQ</a>

    <?php 
    if (isset($_SESSION['uId'])) {
        echo "<a href='profile.php' class='mybutton' >Profile</a>";
    } 
    ?>
</nav>
</header>

<div class="ap-container">

    <h1>FAQ's</h1>

<div class="faq-group">
<ul class="faq">
<li><b>What is an e-Visa?</b>&nbsp;<span>E-Visa is an easiest way to get permit of entry into and travel within the territory for the purpose of short stay. All you need to do is to complete the online application form and pay with your credit/debit card instead of applying through Embassy. After receiving your Visa through email, print it out and bring it along when you travel.<span></span></span></li>
</ul>
<ul class="faq">
<li><b>How long does it take to get my e-Visa?</b>&nbsp;<span>It takes not less then &nbsp;5 working days to make a decision on a visa application .<span></span></span></li>
</ul>
<ul class="faq">
<li><b>Who is eligible for e-Visa?</b>&nbsp;<span>Aliens traveling for short-term purposes are eligible for the e-Visa. For more information click on 'Apply' button on the Main Page and select the country according to your travel document/passport.<span></span></span></li>
</ul>
<ul class="faq">
<li><b>I do not have a supporting document, what should I do?</b>&nbsp;<span>If you do not hold a supporting document, you must continue registration without filling out information about supporting document. Make sure you leave all fields in this section unfilled.<span></span></span></li>
</ul>
<ul class="faq">
<li><b>Do I have to obtain a visa if I do not leave the international transit area?</b>&nbsp;<span>No. You do not have to obtain a visa if you are not going to leave the international transit area.<span></span></span></li>
</ul>
<p>APPLICATION PROCESS</p>
<ul class="faq">
<li><b>Can I choose the language I complete the application form in?</b>&nbsp;<span>No, you must fill in the application form in English.<span></span></span></li>
</ul>
<ul class="faq">
<li><b>In the "Personal Information" section there is no place for a middle name. Where should I enter my middle name?</b>&nbsp;<span>Please, enter your middle name right after your name in the "Given Name" section with a space between the two names.<span></span></span></li>
</ul>
<ul class="faq">
<li><b>My name consists of only one part. In which field should I enter it?</b>&nbsp;<span>If your name consists of only one part (just name or just surname), enter it in the surname field.<span></span></span></li>
</ul>
<ul class="faq">
<li><b>After submission I have realized that some of the information that I provided in the e-Visa application requires correction. What should I do?</b>&nbsp;<span>You must create a new e-Visa application.<span></span></span></li>
</ul>
<ul class="faq">
<li><b>I have visa that will expire soon and I would like to renew it. Do I need go through the whole visa application process again?</b>&nbsp;<span>Yes, you will have to go through the whole visa application process every time you want to apply for a visa.<span></span></span></li>
</ul>
<ul class="faq">
<li><b>Do I need to obtain a separate e-Visa for people accompanying me?</b>&nbsp;<span>Yes. Despite of age, each traveler must obtain a separate e-Visa.<span></span></span></li>
</ul>
<ul class="faq">
<li><b>Why should I enter information about accompanying me persons in my application?</b>&nbsp;<span>You are advised to provide information about your companions to ensure joint examination of your applications.<br />Remember that each traveler should fill out separate application and should provide separate documentation.<span></span></span></li>
</ul>
<ul class="faq">
<li><b>I have submitted application and received verification email. Is there any time limit for making verification?</b>&nbsp;<span>Yes. For security reasons verification email is valid only for 1 hour. You should make verification within 1 hour after receiving email otherwise, your application will be canceled and you will have to go through the whole visa application process once again.<span></span></span></li>
</ul>
<p>ERRORS</p>
<ul class="faq">
<li><b>I completed my application but haven't received any confirmation from you. Did you get my application?</b>&nbsp;<span>Please, check 'spam' and 'junk' folders as well. If this does not help, click resend. If you are experiencing problems with confirmation letter after resending, you should submit a new application and indicate different email address.<span></span></span></li>
</ul>
<p>PAYMENTS/REFUNDS</p>
<ul class="faq">
<li><b>What does the CVV/CVC/CVC2 number mean?</b>&nbsp;<span>CVV/CVC/CVC2 for Visa and MasterCard is the final three digits of the number printed on the signature strip on the back of your card.<span></span></span></li>
</ul>
<ul class="faq">
<li><b>How much is a visa fee?</b>&nbsp;<span>20 USD + 2% service fee.<span></span></span></li>
</ul>
<ul class="faq">
<li><b>How do I pay for my application?</b>&nbsp;<span>After performing email verification you will proceed to payment. State tax should be paid by Visa or MasterCard in 5 hours after receiving notification on E-mail, if not visa application will be cancelled.<span></span></span></li>
</ul>
<ul class="faq">
<li><b>Should the card be under my name?</b>&nbsp;<span>No. The card does not have to be under your name.<span></span></span></li>
</ul>
<ul class="faq">
<li><b>Can I get an invoice?</b>&nbsp;<span>We cannot provide an invoice for your payment. Once a successful payment has been made you will receive a payment confirmation email to the email address used for your application. The payment confirmation email will state the amount paid and application details.<span></span></span></li>
</ul>
<ul class="faq">
<li><b>What should I do if I am experiencing problems in the Payment section?</b>&nbsp;<span>You may need to contact your Card Issuer. This could be a compatibility issue with your Web Browser or Operating System (your Card Issuer should be able to advise you what they support). There could also be an issue if the configuration of your browser or PC is not set to accept cookies from our online payments partner.<span></span></span></li>
</ul>
<ul class="faq">
<li><b>If my e-Visa application is denied, will my payment be refunded?</b>&nbsp;<span>No. e-Visa fee is not refundable.<span></span></span></li>
</ul>
<ul class="faq">
<li><b>I have realized that some information on my e-Visa does not match the information on my travel document/passport. I know that my e-Visa is invalid. Can I get a refund?</b>&nbsp;<span>No. The applicant is responsible for any mistakes made in his/her application.<span></span></span></li>
</ul>
<ul class="faq">
<li><b>Can I get a refund if I do not use my e-Visa?</b>&nbsp;<span>No. visa fee is not refundable.<span></span></span></li>
</ul>
<p>&nbsp;</p>
<p>DOCUMENT REQUIREMENTS</p>
<ul class="faq">
<li><b>What kind of Documentation I need to apply for E-visa?</b>&nbsp;<span>You will need valid travel Document/Passport , Photo and Credit/debit card.<span></span></span></li>
</ul>
<ul class="faq">
<li><b>On which language should I present documentation?</b>&nbsp;<span>All documentation should be presented in English.<span></span></span></li>
</ul>
<ul class="faq">
<li style="text-align: justify;"><b>What are the requirements to my travel document/passport?</b>&nbsp;<span>Your travel document must meet the following criteria:&nbsp;<br />- Its validity shall extend at least for 3 months after the validity period of requested for visa &nbsp;<br />-Document should include not less then 2 free pages.<br />-Should not be damaged and should not include unofficial remarks.<br />- it should be issued within the previous 10 years.<span></span></span></li>
</ul>
<ul class="faq">
<li><b>What does 'data page of travel document/passport' mean?</b>&nbsp;<span>The page in travel document/passport which contains basic information about its bearer's surname, given names, photo and date and place of birth, validity period, issuing authority, place of issue and travel document/passport number, and the dates the travel document/passport was issued and will expire.<span></span></span></li>
</ul>
<ul class="faq">
<li><b>My child is included in my passport. Do I need to make a separate travel document/passport and e-Visa application for her/him?</b>&nbsp;<span>Yes. Despite of age, each traveler should use separate travel document/passport and should obtain a separate e-Visa.<span></span></span></li>
</ul>
<ul class="faq">
<li><b>During Crossing the border which documents should I have with me?</b>&nbsp;<span>&nbsp;<br />-My Travel Document/Passport;&nbsp;<br />-Document proving purpose of travel;&nbsp;<br />-Proof of accommodation;&nbsp;<br />-Travel and health insurance;&nbsp;<br />-Document proving sufficient financial means.<span></span></span></li>
</ul>
<ul class="faq">
<li><b>How can I prove purpose of my travel?</b>&nbsp;<span>You can prove purpose of your travel by presenting invitation, letter from nominating Institute or Organization or by presenting other document proving a purpose of visit.<span></span></span></li>
</ul>
<ul class="faq">
<li><b>What does mean proof of accommodation?</b>&nbsp;<span> Proof of accommodation means booking of a hotel or copy of rental agreement, for entire period of your stay, or document proving real estate.<span></span></span></li>
</ul>
<ul class="faq">
<li><b>Which terms apply to travel and health insurance?</b>&nbsp;<span>Person who wishes to apply for visa should posses travel/health insurance which in case if needed will cover any cost related to condition of his health and death. Health/travel insurance should be valid on whole territory.<span></span></span></li>
</ul>
<ul class="faq">
<li><b>How can I prove that&nbsp; I possess sufficient financial funds?</b>&nbsp;<span>You can prove possession of sufficient&nbsp; financial funds by presenting : Bank statement of the past three months, reference from your Employer which includes information regarding your position and income, document proving possession of real estate, letter from a sponsor. Letter from a sponsor (dated and signed) should include Name and Surname of sponsor, address, Contact Information, relationship between applicant and sponsor, place of destination and duration, list of costs covered by a sponsor.<span></span></span></li>
</ul>
<p>PHOTO REQUIREMENTS</p>
<ul class="faq">
<li><b>How recent must my photo have been taken?</b>&nbsp;<span>Your photo should be taken within 6 months of submitting your application and reflect your current appearance.<span></span></span></li>
</ul>
<ul class="faq">
<li><b>What pose should I be in for my photo?</b>&nbsp;<span>You must directly face the camera. Profile shots will not be accepted.<span></span></span></li>
</ul>
<ul class="faq">
<li><b>How large should my head be in the photo?</b>&nbsp;<span>Your head should be between 50% and 70% of the image's total height from the top of the head, including the hair, to the bottom of the chin.<span></span></span></li>
</ul>
<ul class="faq">
<li><b>Can I wear a hat for the photo?</b>&nbsp;<span>You may only wear a hat or head covering if you wear it daily for religious purposes. Your full face must be visible and your head covering cannot obscure your hairline or cast shadows on your face.<span></span></span></li>
</ul>
<ul class="faq">
<li><b>Can a parent or guardian appear in the photo of a child?</b>&nbsp;<span>No, the child must be the only person in the photo. Nothing used to support the child should be in the camera's frame, including the arms or hands of a parent holding the child.<span></span></span></li>
</ul>
<ul class="faq">
<li><b>Are photos that are copied from recent driver licenses or other official documents acceptable?</b>&nbsp;<span>No. Copied or digitally scanned photos of official documents will not be accepted.<span></span></span></li>
</ul>
<ul class="faq">
<li><b>Are snapshots, magazine photos, mobile device photos, or photos from vending machine acceptable?</b>&nbsp;<span>No. Snapshots, magazine photos, low-resolution vending machine photos, mobile device photos or full-length photos are not acceptable. Please, follow the link to&nbsp;<span></span></span></li>
</ul>
<p>DURATION OF STAY/VALIDITY PERIOD</p>
<ul class="faq">
<li><b>How long will my e-Visa be valid for?</b>&nbsp;<span>The validity period of an e-Visa varies according to Country of Travel Document/Passport. Click on apply button on the main page and select the country according to your travel document/passport to check for how many days you are allowed to stay in.<span></span></span></li>
</ul>
<ul class="faq">
<li><b>What is the difference between validity period and Duration of stay?</b>&nbsp;<span>Understanding the difference between the visa validity period and duration of stay is important. Validity period of a visa is generally longer than its duration. The validity establishes the first and last dates during which the visa can be used. The visa expires on the last day of its validity. Duration of stay indicates the length of time you have permission to remain within the validity period of the visa.<span></span></span></li>
</ul>
<ul class="faq">
<li><b>I received e-Visa which is valid for 120/30, multiple entry. I used visa for 15 days and have already left territory of , the validity period is not expired yet, may I use remaining 15 days?</b>&nbsp;<span>Yes.This type of visa allows you to enter  during its validity period and stay for maximum 30 days with the right of multiple entry.<span></span></span></li>
</ul>
<ul class="faq">
<li><b>I received e-Visa which is valid for 180/90, multiple entries. I used visa for 20 days and have already left territory of , the validity period is not expired yet, may I enter ?</b>&nbsp;<span>Yes, you can enter  until the validity period of your visa expires. Keep in mind, that your stay in total should not exceed 90 days in 180-day period. You may use travel calculator to find out how long you are authorized to stay in .<span></span></span></li>
</ul>
<p>PERSONAL DATA PROTECTION</p>
<ul class="faq">
<li><b>My friend has applied for a visa and I would like to know what is the status of the application, who should I contact?</b>&nbsp;<span>The information about visa application and all visa records are confidential. Only an applicant himself/herself or a legal representative is entitled to get information on visa issuance or denial.<span></span></span></li>
</ul>
<ul class="faq">
<li><b>Is the personal information provided by me protected?</b>&nbsp;<span>Yes. Your personal information will be processed only for the purpose of taking a decision on your visa application. Processing of the personal data provided in the application form will be the subject to the legislation on Personal Data Protection.<span></span></span></li>
</ul>
</div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>












</div>






<?php include 'footer.php'; ?>