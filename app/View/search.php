<div id="" class="allMatche-section card01 d-flex flex-wrap justify-content-center">
      <?php
      $match = $data;

      foreach ($match as $i => $m) :
        
      ?>
        <div style="width: 30rem;" class="card01 d-flex flex-row justify-content-between">
          <div class="card01-border card col-md m-3">
            <img src="<?= APP_URL ?>asset/img/match01.svg" class="card-img-top p-2" alt="..." />
            <div class="card-body p-0">
              <div class="card-body">
                <div class="d-flex flex-row justify-content-between">
                  <p><?= $m->MatchDateTime ?></p>
                  <img src="<?= APP_URL ?>asset/img/ticket.svg" alt="icon-ticket" />
                </div>
                <div class="d-flex flex-row justify-content-start align-items-center">
                  <span class="line-card mr-2"></span>
                  <h6 class="card-title m-0">
                    <?= $m->teamA ?> VS <?= $m->teamB ?>
                  </h6>
                  <span class="line1 mr-2"></span>
                  <span class="fw-medium text-size">MATCH 2</span>
                </div>
                <p class="card-text">
                  <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_54_324)">
                      <path d="M15.985 8.52848C15.9889 8.49769 15.9889 8.46654 15.985 8.43575C15.9932 8.28985 16 8.15077 16 8.00487C16.0019 6.18138 15.3759 4.41284 14.2274 2.99652C14.2013 2.9441 14.1646 2.89767 14.1197 2.86016C13.2714 1.84637 12.1849 1.0588 10.9576 0.568022L10.873 0.53666C9.02217 -0.181491 6.96965 -0.181491 5.1188 0.53666L5.03426 0.568022C3.80734 1.0621 2.72224 1.85297 1.87626 2.86971C1.83129 2.90721 1.79461 2.95364 1.76854 3.00607C0.623529 4.42039 -0.000830383 6.18515 8.28874e-07 8.00487C8.28874e-07 8.15077 0.00818175 8.28985 0.0149995 8.43575C0.0111065 8.46654 0.0111065 8.49769 0.0149995 8.52848C0.103918 9.85008 0.518995 11.129 1.22311 12.251C1.24641 12.2993 1.27475 12.345 1.30765 12.3874C2.3882 14.0373 4.03863 15.2314 5.94375 15.7417H5.96693C7.29848 16.0905 8.69742 16.0905 10.029 15.7417H10.0522C11.9573 15.2314 13.6077 14.0373 14.6883 12.3874C14.7212 12.345 14.7495 12.2993 14.7728 12.251C15.4769 11.129 15.892 9.85008 15.9809 8.52848H15.985ZM3.4239 7.16492L4.43975 7.49626L5.41606 10.5111L4.79291 11.3729H2.13124C1.66107 10.564 1.36738 9.66481 1.26947 8.73437L3.4239 7.16492ZM12.5775 7.16492L14.7264 8.73301C14.6285 9.66345 14.3348 10.5626 13.8647 11.3715H11.2071L10.5839 10.5097L11.5603 7.4949L12.5775 7.16492ZM13.0165 3.46558L12.1984 5.99635L11.1825 6.32769L8.62042 4.45825V3.39604L10.7748 1.82658C11.6297 2.20888 12.3948 2.76632 13.0206 3.46286L13.0165 3.46558ZM5.23198 1.82931L7.3864 3.39877V4.46098L4.82427 6.33042L3.80842 5.99908L2.99029 3.46831C3.61417 2.77091 4.37737 2.2121 5.23061 1.82795L5.23198 1.82931ZM6.61599 14.629L5.79785 12.0983L6.421 11.2365H9.58991L10.2131 12.0983L9.39492 14.629C8.48208 14.824 7.53837 14.824 6.62553 14.629H6.61599Z" fill="#858282" />
                    </g>
                    <defs>
                      <clipPath id="clip0_54_324">
                        <rect width="16" height="15.9918" fill="white" transform="translate(0 0.00390625)" />
                      </clipPath>
                    </defs>
                  </svg>
                  <i><?= $m->stadiomName ?> <?= $m->city ?></i>
                </p>
                <a href="./match/reserve/<?= $m->id ?>" class="To-book btn btn-primary">
                  <i class="bi bi-ticket-fill"></i>Book Ticket
                </a>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach;   ?>




    </div>