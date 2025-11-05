<?php
$services = [
    'massage' => [
        'title' => 'Massage Therapy',
        'description' => 'Relaxing and therapeutic massages for your body and mind',
        'image' => '/assets/images/massage.jpg',
    ],
    'facial' => [
        'title' => 'Facial Treatments',
        'description' => 'Rejuvenating facials for radiant, glowing skin',
        'image' => '/assets/images/facial.jpg',
    ],
    'body_treatment' => [
        'title' => 'Body Treatments',
        'description' => 'Nourishing body wraps and scrubs',
        'image' => '/assets/images/body-treatment.jpg',
    ],
    'body_treatment_light' => [
        'title' => 'Body Treatments light',
        'description' => 'Nourishing body wraps and scrubs1',
        'image' => '/assets/images/body-treatment.jpg',
    ]
];
?>
<!-- // Перший варіант -->
<!-- <div class="service-grid"> -->
    <!-- <div class="service-card"> -->
        <!-- <img src="<?php echo $services['massage']['image']; ?>"> -->
        <!-- <h3><?php echo $services['massage']['title']; ?></h3> -->
        <!-- <p><?php echo $services['massage']['description']; ?></p> -->
    <!-- </div> -->
    <!-- <div class="service-card"> -->
        <!-- <img src="<?php echo $services['facial']['image']; ?>"> -->
        <!-- <h3><?php echo $services['facial']['title']; ?></h3> -->
        <!-- <p><?php echo $services['facial']['description']; ?></p> -->
    <!-- </div> -->
    <!-- <div class="service-card"> -->
        <!-- <img src="<?php echo $services['body_treatment']['image']; ?>"> -->
        <!-- <h3><?php echo $services['body_treatment']['title']; ?></h3> -->
        <!-- <p><?php echo $services['body_treatment']['description']; ?></p> -->
    <!-- </div> -->
    <!-- <div class="service-card"> -->
        <!-- <img src="<?php echo $services['body_treatment_light']['image']; ?>"> -->
        <!-- <h3><?php echo $services['body_treatment_light']['title']; ?></h3> -->
        <!-- <p><?php echo $services['body_treatment_light']['description']; ?></p> -->
    <!-- </div> -->
<!-- </div> -->

<!-- Другий варіант -->

<div class="service-grid">
    <?php foreach ($services as $item) : ?>
        <div class="service-card">
            <img src="<?php echo $item['image']; ?>">
            <h3><?php echo $item['title']; ?></h3>
            <p><?php echo $item['description']; ?></p>            
        </div>
    <?php endforeach; ?>
</div>