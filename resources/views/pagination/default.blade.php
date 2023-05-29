<?php
// config
$link_limit = 100; // maximum number of links (a little bit inaccurate, but will be ok for now)
?>

@if ($paginator->lastPage() > 1)
    <div class="pagination-wrap mt-30">
        <nav aria-label="Page navigation example">
            <ul class="pagination list-wrap">
                <li class="page-item prev-page {{ ($paginator->currentPage() == 1) ? ' disabled' : '' }}">
                    <a class="page-link" href="{{ $paginator->url($paginator->currentPage()-1) }}">
                        <i class="fas fa-chevron-left"></i>
                    </a>
                </li>

                @for ($i = 1; $i <= $paginator->lastPage(); $i++)
                    <?php
                    $half_total_links = floor($link_limit / 2);
                    $from = $paginator->currentPage() - $half_total_links;
                    $to = $paginator->currentPage() + $half_total_links;
                    if ($paginator->currentPage() < $half_total_links) {
                        $to += $half_total_links - $paginator->currentPage();
                    }
                    if ($paginator->lastPage() - $paginator->currentPage() < $half_total_links) {
                        $from -= $half_total_links - ($paginator->lastPage() - $paginator->currentPage()) - 1;
                    }
                    ?>
                    @if ($from < $i && $i < $to)
                        <li class="button page-item {{ ($paginator->currentPage() == $i) ? ' active' : '' }}">
                            <a class="page-link" href="{{ $paginator->url($i) }}">{{$i}}</a>
                        </li>
                    @endif
                @endfor
                <li class="button page-item {{ ($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : '' }}">
                    <a class="page-link" href="{{ $paginator->url($paginator->currentPage() + 1) }}">
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </li>

            </ul>
        </nav>
    </div>  
@endif