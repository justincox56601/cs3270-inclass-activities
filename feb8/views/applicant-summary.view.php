<div style="border: 1px solid lightblue; margin-bottom:1rem">
    <div>
        <span><?= "{$applicant['firstName']} {$applicant['lastName']}"?></span>
    </div>
    <div>
        <span>Level: <?= $applicant['level']?>, </span> 
        <span>experience: <?= $applicant['experience']?> years, </span>
        <span>skills: <?= implode(', ', $applicant['skills'])?></span> 
    </div>
</div>