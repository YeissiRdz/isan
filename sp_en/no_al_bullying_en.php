<!DOCTYPE html>
<html lang="es_mx">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>#NoalBullying</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles_sp/no_al_bullying.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
</head>
<?php include_once("../rp_en/head_en.php") ?>
<?php include_once("../rp_en/navbar_en.php") ?>
<body>
    <section class="first_section_politicas">
        <div class="first_section_politicas_grid">
            <div class="first_section_politicas_grid_text">
                <p>ISAN</p>
                <h2>#NotoBullying</h2>
            </div>
            <div class="first_section_politicas_grid_img">
                <img src="../img_sp/politicas_de_privacidad/portada.png">
            </div>
        </div>
    </section>

    <ol class="container-nb" style="--length: 5" role="list">
        <li class="list-li" style="--i: 1">
            <h3 class="list-h">Awareness and Identification</h3>.
            <p>Gather detailed information about bullying incidents, including dates, locations, and people involved. Report the behavior to the appropriate authorities, such as school administrators or human resources teams.</p>
            <p class="list-p"><strong>The first step in combating bullying is to recognize its signs, whether physical, verbal or cyberbullying. This includes identifying aggressions such as hitting, insults, teasing or offensive messages online. It is key to observe changes in victims, such as isolation, sadness or visible injuries. Encouraging open communication is essential so that victims can share their experiences without fear. Creating spaces of trust and teaching how to detect these signs helps prevent situations from worsening. In addition, educating about the effects of bullying promotes empathy, respect and inclusion in the community.</strong></p>
        </li>
        <li class="list-li" style="--i: 2">
            <h3 class="list-h">Information Collection and Reporting</h3>.
            <p>Obtain explicit consent from parents or guardians before collecting, storing, or sharing personal data of students.</p>
            <p class="list-p"><strong>Keep a detailed record of bullying incidents to address the situation with clear evidence. This includes noting dates, locations, and names of people involved, both victims and witnesses. Documenting the details helps to understand the scope of the problem and provides solid support when taking action. It is critical to report this behavior to the appropriate authorities, such as school administrators, human resources teams or any responsible parties. Timely intervention based on accurate information allows for effective measures to be implemented to protect victims and prevent future instances of bullying.</strong></p>
        </li>
        <li class="list-li" style="--i: 3">
            <h3 class="list-h">Support and Intervention</h3>
            <p>Provides emotional support to the victim and involves counselors or trained professionals to assist in recovery. Addresses the batterer's behavior in a constructive manner to prevent a recurrence.</p>
            <p class="list-p"><strong>Offer immediate emotional support to the victim, making sure she feels heard and understood. Involve counselors, psychologists or trained professionals to provide assistance in her recovery process and strengthen her emotional well-being. It is equally important to address the batterer's behavior in a constructive manner, seeking to understand the causes behind his actions. Working with the aggressor through counseling or re-education programs helps to prevent this type of behavior from recurring, fostering an environment of respect and coexistence.</strong></p>
        </li>
        <li class="list-li" style="--i: 4">
            <h3 class="list-h">Education and Prevention</h3>
            <p>Implements anti-bullying programs, workshops and campaigns to educate about the importance of respect, empathy and diversity.
            <p class="list-p"><strong>Establish specific anti-bullying programs that promote a culture of respect and coexistence. Organize interactive workshops and educational campaigns that highlight the importance of values such as empathy, tolerance and acceptance of diversity. These initiatives should target students as well as teachers and families, fostering a community approach to bullying prevention. By raising awareness among all involved, a more inclusive and safer environment is created for all.</strong></p>
        </li>
        <li class="list-li" style="--i: 5">
            <h3 class="list-h">Monitoring and Follow-up</h3>.
            <p>Conduct regular checks with all parties involved to ensure that the bullying has stopped and that both the victim and the bully are receiving appropriate support.</p>
            <p class="list-p"><strong>Conduct periodic checks with all parties involved to ensure that the bullying has completely stopped. This includes follow-up meetings with the victim to assess his or her emotional well-being and integration into the environment, as well as with the aggressor to monitor his or her progress and compliance with corrective measures. Ongoing monitoring ensures that both parties receive the necessary support, whether emotional, educational or behavioral, promoting a safe and respectful environment in the long term.</strong></p>
        </li>
    </ol>

</body>
<script>
    document.addEventListener("DOMContentLoaded", () => {
        const items = document.querySelectorAll(".list-li");

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    entry.target.style.animation = `slideIn 0.6s ease-out forwards ${entry.target.style.getPropertyValue("--i") * 0.2}s`;
                    observer.unobserve(entry.target);
                }
            });
        });

        items.forEach((item) => observer.observe(item));

        items.forEach((item) => {
            const header = item.querySelector(".list-h");

            header.addEventListener("mouseover", () => {
                header.style.color = "hsl(219, 61%, 55%)"; 
            });

            header.addEventListener("mouseout", () => {
                header.style.color = "rgb(70, 70, 70)"; 
            });


            item.addEventListener("click", () => {
                const content = item.querySelector(".list-p");
                content.style.display = content.style.display === "none" ? "block" : "none";
            });
        });
    });
</script>
<?php include_once("../rp_en/footer_en.php") ?>
</html>