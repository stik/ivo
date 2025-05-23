<section class="py-12">
<div class="container text-content">
    <div  style="max-width: 1000px;">
        <h1>H1 SUB-IVECO</h1>
        <h2>H2 SUB-IVECO</h2>
        <h3>H3 SUB-IVECO</h3>
        <h4>H4 SUB-IVECO</h4>
        <h5>H5 SUB-IVECO</h5>
        <h6>H6 SUB-IVECO</h6>

        <p>V Autocentru Hájek si zakládáme na osobním a <a href="#">poctivém pøístupu</a>. Nejde o frázi. Bìhem  servisu nebo opravy <strong>mùžete své vozidlo kdykoliv zkontrolovat</strong>. Vždy tak máte pøehled, co se s vaším vozem právì dìje. Jednotlivé díly u nás nekonèí hned v koši, ale snažíme se je opravit. Za nové je mìníme, je-li to skuteènì nezbytné.</p>

        <ul>
            <li>List item</li>
            <li>List item</li>
            <li>List item</li>
        </ul>

        <ol>
            <li>List item</li>
            <li>List item</li>
            <li>List item</li>
        </ol>

        <blockquote>
            <p>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet</p>
        </blockquote>

        <table>
            <thead>
                <tr>
                    <th>Table header</th>
                    <th>Table header</th>
                    <th>Table header</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Table cell</td>
                    <td>Table cell</td>
                    <td>Table cell</td>
                </tr>
                <tr>
                    <td>Table cell</td>
                    <td>Table cell</td>
                    <td>Table cell</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td>Table footer</td>
                    <td>Table footer</td>
                    <td>Table footer</td>
                </tr>
            </tfoot>
        </table>
        <br>
        <div class="flex flex-row flex-wrap gap-4">
            <?php load_part('parts/button', ['link'       => '#pobocka-1', 
                                            'title'      => 'Kontakty Lodìnice',
                                            'icon_after' => file_get_contents(__DIR__.'/../imgs/arrow_large.svg'),
                                            'size'       => 'lg',
                                            'type'       => 'primary',
                                            'theme'      => 'light',
                                            ]); ?>
                                            
            <?php load_part('parts/button', ['link'       => '#pobocka-2', 
                                            'title'      => 'Kontakty  Nýøany',
                                            'icon_after' => file_get_contents(__DIR__.'/../imgs/arrow_large.svg'),
                                            'size'       => 'lg',
                                            'type'       => 'primary',
                                            'theme'      => 'light',
                                            ]); ?>

        </div>
</div>
</div>
</section>