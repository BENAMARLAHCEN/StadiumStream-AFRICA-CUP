<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

    <li class="nav-item">
        <a class="nav-link gap-2 <?php if ($URI[0] !== 'Overview') echo 'collapsed' ?>" href="index.php">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g fill="none" stroke="#93a4c3" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"><path stroke-miterlimit="5.759" d="M3 3v16a2 2 0 0 0 2 2h16"/><path stroke-miterlimit="5.759" d="m7 14l4-4l4 4l6-6"/><path d="M18 8h3v3"/></g></svg>
            <span>Statistiques </span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link gap-2 <?php if ($URI[0] !== 'Team') echo 'collapsed' ?>" href="<?=asset('Team')?>">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#93a4c3" d="M14.754 10c.966 0 1.75.784 1.75 1.75v4.749a4.501 4.501 0 0 1-9.002 0V11.75c0-.966.783-1.75 1.75-1.75zm-7.623 0a2.72 2.72 0 0 0-.62 1.53l-.01.22v4.749c0 .847.192 1.649.534 2.365A4.001 4.001 0 0 1 2 14.999V11.75a1.75 1.75 0 0 1 1.606-1.744L3.75 10zm9.744 0h3.375c.966 0 1.75.784 1.75 1.75V15a4 4 0 0 1-5.03 3.866c.3-.628.484-1.32.525-2.052l.009-.315V11.75c0-.665-.236-1.275-.63-1.75M12 3a3 3 0 1 1 0 6a3 3 0 0 1 0-6m6.5 1a2.5 2.5 0 1 1 0 5a2.5 2.5 0 0 1 0-5m-13 0a2.5 2.5 0 1 1 0 5a2.5 2.5 0 0 1 0-5"/></svg>
            <span>Team Management</span>
        </a>
    </li>   
    <li class="nav-item">
        <a class="nav-link gap-2 <?php if ($URI[0] !== 'Match') echo 'collapsed' ?>" href="<?=asset('Matche')?>">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#93a4c3" d="m3 19l4.5-7L3 5h12q.5 0 .938.225t.712.625l4.025 5.675q-.6-.25-1.388-.4T17.85 11q-2.95.05-4.9 2.138T11 18.025q0 .25.013.488t.062.487zm15 4q-2.075 0-3.537-1.463T13 18q0-2.075 1.463-3.537T18 13q2.075 0 3.538 1.463T23 18q0 2.075-1.463 3.538T18 23m-.725-2.75l3.475-3.45l-1.05-1.05l-2.425 2.375l-.975-.975l-1.05 1.075z"/></svg>
            <span>Match & Champing</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link gap-2 <?php if ($URI[0] !== 'Stadium') echo 'collapsed' ?>" href="<?=asset('Stadium')?>">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#93a4c3" d="M3 7V3l4 2zm15 0V3l4 2zm-7-1V2l4 2zM9 21.875q-1.3-.125-2.55-.375t-2.238-.612q-.987-.363-1.6-.838T2 19v-9q0-.625.788-1.162t2.137-.95q1.35-.413 3.175-.65T12 7q2.075 0 3.9.238t3.175.65q1.35.412 2.138.95T22 10v9q0 .575-.612 1.05t-1.6.838q-.988.362-2.238.612t-2.55.375V17H9zM12 11q2.425 0 4.188-.288T19 10.05q0-.125-1.9-.587T12 9q-3.2 0-5.1.463T5 10.05q1.05.375 2.813.663T12 11"/></svg>
            <span>Stadium Management</span>
        </a>
    </li>  
    <li class="nav-item ">
        <a class="nav-link gap-2 <?php if ($URI[0] !== 'User') echo 'collapsed' ?>" href="UserManager">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="#93a4c3" d="M16 17v2H2v-2s0-4 7-4s7 4 7 4m-3.5-9.5A3.5 3.5 0 1 0 9 11a3.5 3.5 0 0 0 3.5-3.5m3.44 5.5A5.32 5.32 0 0 1 18 17v2h4v-2s0-3.63-6.06-4M15 4a3.39 3.39 0 0 0-1.93.59a5 5 0 0 1 0 5.82A3.39 3.39 0 0 0 15 11a3.5 3.5 0 0 0 0-7"/></svg>
            <span>Users management</span>
        </a>
    </li>
</ul>

</aside>