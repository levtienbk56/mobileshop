<table class="table table-mailbox table-list-search" >
<?php foreach ($feedbacks as $feedback) { ?>
    <tr <?php if ($feedback->status == 1) echo "class=\"unread\""; //da doc ?> >
        <td class="small-col"><input type="checkbox" /></td>
        <td class="small-col"><i class="fa fa-star"></i></td>
        <td class="name"><a href=""><?php echo $feedback->name; ?></a></td>
        <td class="subject"><a href="#"><?php echo $feedback->subject; ?></a></td>
        <td class="subject"><a href="#"><?php $content = $feedback->content;
    if (strlen($content) > 40) echo substr($content, 40) . "...";
    else echo $content; ?></a></td>
        <td class="time"><?php echo date("d/m/y g:i A", strtotime($feedback->time)); ?></td>
    </tr>
<?php } ?>
</table>
    <style>
        tr{line-height: 30px;}
    </style>