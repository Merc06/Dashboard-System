<li>
    <a class="accordion-heading" data-toggle="collapse" data-target="#submenu1">
        <i class="pe-7s-link"></i>
        <p class="nav-header-primary" style="cursor:pointer;">QUICK-LINKS 
            <span class="pull-right">
                <b class="caret"></b>
            </span>
        </p>
    </a>
    <ul class="nav nav-list collapse" id="submenu1">
        <?php
            $links = "SELECT * FROM links_tbl";
            $result = mysqli_query($conn, $links);
            while($row = mysqli_fetch_array($result)){
                $id = $row['link_id'];
                $link_title = $row['link_title'];
                $link_url = $row['link_url'];
                echo '
                    <li style="margin-left:40px;">
                        <a href="#" class="add_frame" id="'.$id.'">'.$link_title.'</a>
                    </li>
                ';
            }
        ?>

    </ul>
</li>