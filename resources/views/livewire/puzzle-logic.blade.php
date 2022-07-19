<table class="table table-secondary table-striped table-responsive">
    <thead>
        <tr>
        <th scope="col">Names</th>
        <th scope="col">Occupations</th>
        <th scope="col">Colours</th>
        <th scope="col">Cars</th>
        <th scope="col">Brought</th>
        <th scope="col">Borrowed</th>
        </tr>
    </thead>
    <tbody class="table-group-divider">
        <tr>
            <td>
                <div class="input-group">
                    <input wire:model="name1" type="text" class="form-control
                    @if($name1 == 'daniella and mathew black' || $name1 == 'mathew and daniella black')
                        bg-success
                    @elseif(Str::contains($name1, ['daniella', 'mathew', 'black']))
                        bg-warning
                    @elseif(($name1 != NULL) && !Str::contains($name1, ['daniella', 'mathew', 'black']))
                        bg-danger
                    @endif"
                    style="text-transform:uppercase">
                </div>
            </td>
            <td>
                <div class="input-group">
                    <input wire:model="occupation1" type="text" class="form-control
                    @if($occupation1 == 'shop-assistants')
                        bg-success
                    @elseif(Str::contains($occupation1, ['shop', 'assistants', 'assist']))
                        bg-warning
                    @elseif(($occupation1 != NULL) && !Str::contains($occupation1, ['shop', 'assistants']))
                        bg-danger
                    @endif" style="text-transform:uppercase">
                </div>
            </td>
            <td>
                <div class="input-group">
                    <input wire:model="colour1" type="text" class="form-control
                    @if($colour1 == 'pink')
                        bg-success
                    @elseif(Str::contains($colour1, ['pi']))
                        bg-warning
                    @elseif(($colour1 != NULL) && !Str::contains($colour1, ['pi']))
                        bg-danger
                    @endif" style="text-transform:uppercase">
                </div>
            </td>
            <td>
                <div class="input-group">
                    <input wire:model="car1" type="text" class="form-control
                    @if($car1 == 'trabant')
                        bg-success
                    @elseif(Str::contains($car1, ['tra', 'ban']))
                        bg-warning
                    @elseif(($car1 != NULL) && !Str::contains($car1, ['tra', 'ban']))
                        bg-danger
                    @endif" style="text-transform:uppercase">
                </div>
            </td>
            <td>
                <div class="input-group">
                    <input wire:model="brought1" type="text" class="form-control
                    @if($brought1 == 'mulatka gabriela')
                        bg-success
                    @elseif(Str::contains($brought1, ['mul', 'gab']))
                        bg-warning
                    @elseif(($brought1 != NULL) && !Str::contains($brought1, ['mul', 'gab']))
                        bg-danger
                    @endif" style="text-transform:uppercase">
                </div>
            </td>
            <td>
                <div class="input-group">
                    <input wire:model="borrowed1" type="text" class="form-control
                    @if($borrowed1 == 'we were five')
                        bg-success
                    @elseif(Str::contains($borrowed1, ['we', 'fiv']))
                        bg-warning
                    @elseif(($borrowed1 != NULL) && !Str::contains($borrowed1, ['we', 'fiv']))
                        bg-danger
                    @endif" style="text-transform:uppercase">
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="input-group">
                    <input wire:model="name2" type="text" class="form-control
                    @if($name2 == 'owen and victoria kuril' || $name2 == 'victoria and owen kuril')
                        bg-success
                    @elseif(Str::contains($name2, ['owen', 'victoria', 'kuril']))
                        bg-warning
                    @elseif(($name2 != NULL) && !Str::contains($name2, ['daniella', 'mathew', 'black']))
                        bg-danger
                    @endif" style="text-transform:uppercase">
                </div>
            </td>
            <td>
                <div class="input-group">
                    <input wire:model="occupation2" type="text" class="form-control
                    @if($occupation2 == 'doctors')
                        bg-success
                    @elseif(Str::contains($occupation2, ['doc', 'tor']))
                        bg-warning
                    @elseif(($occupation2 != NULL) && !Str::contains($occupation2, ['doc', 'tor']))
                        bg-danger
                    @endif" style="text-transform:uppercase">
                </div>
            </td>
            <td>
                <div class="input-group">
                    <input wire:model="colour2" type="text" class="form-control
                    @if($colour2 == 'brown')
                        bg-success
                    @elseif(Str::contains($colour2, ['br', 'bro', 'brow']))
                        bg-warning
                    @elseif(($colour2 != NULL) && !Str::contains($colour2, ['br', 'bro', 'brow']))
                        bg-danger
                    @endif" style="text-transform:uppercase">
                </div>
            </td>
            <td>
                <div class="input-group">
                    <input wire:model="car2" type="text" class="form-control
                    @if($car2 == 'skoda')
                        bg-success
                    @elseif(Str::contains($car2, ['sko', 'da']))
                        bg-warning
                    @elseif(($car2 != NULL) && !Str::contains($car2, ['sko', 'da']))
                        bg-danger
                    @endif" style="text-transform:uppercase">
                </div>
            </td>
            <td>
                <div class="input-group">
                    <input wire:model="brought2" type="text" class="form-control
                    @if($brought2 == 'the modern comedy')
                        bg-success
                    @elseif(Str::contains($brought2, ['th', 'mod', 'com']))
                        bg-warning
                    @elseif(($brought2 != NULL) && !Str::contains($brought2, ['th', 'mod', 'com']))
                        bg-danger
                    @endif" style="text-transform:uppercase">
                </div>
            </td>
            <td>
                <div class="input-group">
                    <input wire:model="borrowed2" type="text" class="form-control
                    @if($borrowed2 == 'slovacko judge')
                        bg-success
                    @elseif(Str::contains($borrowed2, ['slo', 'jud']))
                        bg-warning
                    @elseif(($borrowed2 != NULL) && !Str::contains($borrowed2, ['slo', 'jud']))
                        bg-danger
                    @endif" style="text-transform:uppercase">
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="input-group">
                    <input wire:model="name3" type="text" class="form-control
                    @if($name3 == 'hannah and stan horricks' || $name3 == 'stan and hannah horricks')
                        bg-success
                    @elseif(Str::contains($name3, ['hannah', 'stan', 'horricks']))
                        bg-warning
                    @elseif(($name3 != NULL) && !Str::contains($name3, ['hannah', 'stan', 'horricks']))
                        bg-danger
                    @endif" style="text-transform:uppercase">
                </div>
            </td>
            <td>
                <div class="input-group">
                    <input wire:model="occupation3" type="text" class="form-control
                    @if($occupation3 == 'agriculturalists')
                        bg-success
                    @elseif(Str::contains($occupation3, ['agri', 'cultur']))
                        bg-warning
                    @elseif(($occupation3 != NULL) && !Str::contains($occupation3, ['agri', 'cultur']))
                        bg-danger
                    @endif" style="text-transform:uppercase">
                </div>
            </td>
            <td>
                <div class="input-group">
                    <input wire:model="colour3" type="text" class="form-control
                    @if($colour3 == 'white')
                        bg-success
                    @elseif(Str::contains($colour3, ['wh', 'whi', 'whit']))
                        bg-warning
                    @elseif(($colour3 != NULL) && !Str::contains($colour3, ['wh', 'whi', 'whit']))
                        bg-danger
                    @endif" style="text-transform:uppercase">
                </div>
            </td>
            <td>
                <div class="input-group">
                    <input wire:model="car3" type="text" class="form-control
                    @if($car3 == 'moskvic')
                        bg-success
                    @elseif(Str::contains($car3, ['mos', 'vic']))
                        bg-warning
                    @elseif(($car3 != NULL) && !Str::contains($car3, ['mos', 'vic']))
                        bg-danger
                    @endif" style="text-transform:uppercase">
                </div>
            </td>
            <td>
                <div class="input-group">
                    <input wire:model="brought3" type="text" class="form-control
                    @if($brought3 == 'dame commissar')
                        bg-success
                    @elseif(Str::contains($brought3, ['dam', 'com', 'issar']))
                        bg-warning
                    @elseif(($brought3 != NULL) && !Str::contains($brought3, ['dam', 'com', 'issar']))
                        bg-danger
                    @endif" style="text-transform:uppercase">
                </div>
            </td>
            <td>
                <div class="input-group">
                    <input wire:model="borrowed3" type="text" class="form-control
                    @if($borrowed3 == 'mulatka gabriela')
                        bg-success
                    @elseif(Str::contains($borrowed3, ['mul', 'gab']))
                        bg-warning
                    @elseif(($borrowed3 != NULL) && !Str::contains($borrowed3, ['mul', 'gab']))
                        bg-danger
                    @endif" style="text-transform:uppercase">
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="input-group">
                    <input wire:model="name4" type="text" class="form-control
                    @if($name4 == 'jenny and robert smith' || $name4 == 'robert and jenny smith')
                        bg-success
                    @elseif(Str::contains($name4, ['jenny', 'robert', 'smith']))
                        bg-warning
                    @elseif(($name4 != NULL) && !Str::contains($name4, ['jenny', 'robert', 'smith']))
                        bg-danger
                    @endif" style="text-transform:uppercase">
                </div>
            </td>
            <td>
                <div class="input-group">
                    <input wire:model="occupation4" type="text" class="form-control
                    @if($occupation4 == 'warehouse managers')
                        bg-success
                    @elseif(Str::contains($occupation4, ['warehouse', 'managers', 'manage']))
                        bg-warning
                    @elseif(($occupation4 != NULL) && !Str::contains($occupation4, ['warehouse', 'managers']))
                        bg-danger
                    @endif" style="text-transform:uppercase">
                </div>
            </td>
            <td>
                <div class="input-group">
                    <input wire:model="colour4" type="text" class="form-control
                    @if($colour4 == 'yellow')
                        bg-success
                    @elseif(Str::contains($colour4, ['yel', 'yello']))
                        bg-warning
                    @elseif(($colour4 != NULL) && !Str::contains($colour4, ['yel', 'yello']))
                        bg-danger
                    @endif" style="text-transform:uppercase">
                </div>
            </td>
            <td>
                <div class="input-group">
                    <input wire:model="car4" type="text" class="form-control
                    @if($car4 == 'wartburg')
                        bg-success
                    @elseif(Str::contains($car4, ['war', 'bur']))
                        bg-warning
                    @elseif(($car4 != NULL) && !Str::contains($car4, ['war', 'bur']))
                        bg-danger
                    @endif" style="text-transform:uppercase">
                </div>
            </td>
            <td>
                <div class="input-group">
                    <input wire:model="brought4" type="text" class="form-control
                    @if($brought4 == 'we were five')
                        bg-success
                    @elseif(Str::contains($brought4, ['we', 'fiv']))
                        bg-warning
                    @elseif(($brought4 != NULL) && !Str::contains($brought4, ['we', 'fiv']))
                        bg-danger
                    @endif" style="text-transform:uppercase">
                </div>
            </td>
            <td>
                <div class="input-group">
                    <input wire:model="borrowed4" type="text" class="form-control
                    @if($borrowed4 == 'the modern comedy')
                        bg-success
                    @elseif(Str::contains($borrowed4, ['th', 'mod', 'com']))
                        bg-warning
                    @elseif(($borrowed4 != NULL) && !Str::contains($borrowed4, ['th', 'mod', 'com']))
                        bg-danger
                    @endif" style="text-transform:uppercase">
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="input-group">
                    <input wire:model="name5" type="text" class="form-control
                    @if($name5 == 'monica and alexander chermaks' || $name5 == 'alexander and monica chermaks')
                        bg-success
                    @elseif(Str::contains($name5, ['monica', 'alexander', 'chermaks']))
                        bg-warning
                    @elseif(($name5 != NULL) && !Str::contains($name5, ['monica', 'alexander', 'chermaks']))
                        bg-danger
                    @endif" style="text-transform:uppercase">
                </div>
            </td>
            <td>
                <div class="input-group">
                    <input wire:model="occupation5" type="text" class="form-control
                    @if($occupation5 == 'ticket-collectors')
                        bg-success
                    @elseif(Str::contains($occupation5, ['ticket', 'collectors', 'collect']))
                        bg-warning
                    @elseif(($occupation5 != NULL) && !Str::contains($occupation5, ['ticket', 'collectors']))
                        bg-danger
                    @endif" style="text-transform:uppercase">
                </div>
            </td>
            <td>
                <div class="input-group">
                    <input wire:model="colour5" type="text" class="form-control
                    @if($colour5 == 'violet')
                        bg-success
                    @elseif(Str::contains($colour5, ['vio', 'let']))
                        bg-warning
                    @elseif(($colour5 != NULL) && !Str::contains($colour5, ['vio', 'let']))
                        bg-danger
                    @endif" style="text-transform:uppercase">
                </div>
            </td>
            <td>
                <div class="input-group">
                    <input wire:model="car5" type="text" class="form-control
                    @if($car5 == 'darcia')
                        bg-success
                    @elseif(Str::contains($car5, ['dar', 'cia']))
                        bg-warning
                    @elseif(($car5 != NULL) && !Str::contains($car5, ['dar', 'cia']))
                        bg-danger
                    @endif" style="text-transform:uppercase">
                </div>
            </td>
            <td>
                <div class="input-group">
                    <input wire:model="brought5" type="text" class="form-control
                    @if($brought5 == 'shed stoat')
                        bg-success
                    @elseif(Str::contains($brought5, ['she', 'sto']))
                        bg-warning
                    @elseif(($brought5 != NULL) && !Str::contains($brought5, ['she', 'sto']))
                        bg-danger
                    @endif" style="text-transform:uppercase">
                </div>
            </td>
            <td>
                <div class="input-group">
                    <input wire:model="borrowed5" type="text" class="form-control
                    @if($borrowed5 == 'grandfather joseph')
                        bg-success
                    @elseif(Str::contains($borrowed5, ['gra', 'jos']))
                        bg-warning
                    @elseif(($borrowed5 != NULL) && !Str::contains($borrowed5, ['gra', 'jos']))
                        bg-danger
                    @endif" style="text-transform:uppercase">
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="input-group">
                    <input wire:model="name6" type="text" class="form-control
                    @if($name6 == 'irene and oto zajac' || $name6 == 'oto and irene zajac')
                        bg-success
                    @elseif(Str::contains($name6, ['irene', 'oto', 'zajac']))
                        bg-warning
                    @elseif(($name6 != NULL) && !Str::contains($name6, ['irene', 'oto', 'zajac']))
                        bg-danger
                    @endif" style="text-transform:uppercase">
                </div>
            </td>
            <td>
                <div class="input-group">
                    <input wire:model="occupation6" type="text" class="form-control
                    @if($occupation6 == 'accountants')
                        bg-success
                    @elseif(Str::contains($occupation6, ['account', 'tants']))
                        bg-warning
                    @elseif(($occupation6 != NULL) && !Str::contains($occupation6, ['account', 'tants']))
                        bg-danger
                    @endif" style="text-transform:uppercase">
                </div>
            </td>
            <td>
                <div class="input-group">
                    <input wire:model="colour6" type="text" class="form-control
                    @if($colour6 == 'red')
                        bg-success
                    @elseif(Str::contains($colour6, ['r', 're']))
                        bg-warning
                    @elseif(($colour6 != NULL) && !Str::contains($colour6, ['r', 're']))
                        bg-danger
                    @endif" style="text-transform:uppercase">
                </div>
            </td>
            <td>
                <div class="input-group">
                    <input wire:model="car6" type="text" class="form-control
                    @if($car6 == 'fiat')
                        bg-success
                    @elseif(Str::contains($car6, ['fi', 'at']))
                        bg-warning
                    @elseif(($car6 != NULL) && !Str::contains($car6, ['fi', 'at']))
                        bg-danger
                    @endif" style="text-transform:uppercase">
                </div>
            </td>
            <td>
                <div class="input-group">
                    <input wire:model="brought6" type="text" class="form-control
                    @if($brought6 == 'the seadog')
                        bg-success
                    @elseif(Str::contains($brought6, ['th', 'sea']))
                        bg-warning
                    @elseif(($brought6 != NULL) && !Str::contains($brought6, ['th', 'sea']))
                        bg-danger
                    @endif" style="text-transform:uppercase">
                </div>
            </td>
            <td>
                <div class="input-group">
                    <input wire:model="borrowed6" type="text" class="form-control
                    @if($borrowed6 == 'shed stoat')
                        bg-success
                    @elseif(Str::contains($borrowed6, ['sh', 'sto']))
                        bg-warning
                    @elseif(($borrowed6 != NULL) && !Str::contains($borrowed6, ['sh', 'sto']))
                        bg-danger
                    @endif" style="text-transform:uppercase">
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="input-group">
                    <input wire:model="name7" type="text" class="form-control
                    @if($name7 == 'veronica and rick dvorak' || $name7 == 'rick and veronica dvorak')
                        bg-success
                    @elseif(Str::contains($name7, ['veronica', 'rick', 'dvorak']))
                        bg-warning
                    @elseif(($name7 != NULL) && !Str::contains($name7, ['veronica', 'rick', 'dvorak']))
                        bg-danger
                    @endif" style="text-transform:uppercase">
                </div>
            </td>
            <td>
                <div class="input-group">
                    <input wire:model="occupation7" type="text" class="form-control
                    @if($occupation7 == 'teachers')
                        bg-success
                    @elseif(Str::contains($occupation7, ['teach']))
                        bg-warning
                    @elseif(($occupation7 != NULL) && !Str::contains($occupation7, ['teach']))
                        bg-danger
                    @endif" style="text-transform:uppercase">
                </div>
            </td>
            <td>
                <div class="input-group">
                    <input wire:model="colour7" type="text" class="form-control
                    @if($colour7 == 'blue')
                        bg-success
                    @elseif(Str::contains($colour7, ['bl', 'lue']))
                        bg-warning
                    @elseif(($colour7 != NULL) && !Str::contains($colour7, ['bl', 'lue']))
                        bg-danger
                    @endif" style="text-transform:uppercase">
                </div>
            </td>
            <td>
                <div class="input-group">
                    <input wire:model="car7" type="text" class="form-control
                    @if($car7 == 'ziguli')
                        bg-success
                    @elseif(Str::contains($car7, ['zig', 'uli']))
                        bg-warning
                    @elseif(($car7 != NULL) && !Str::contains($car7, ['zig', 'uli']))
                        bg-danger
                    @endif" style="text-transform:uppercase">
                </div>
            </td>
            <td>
                <div class="input-group">
                    <input wire:model="brought7" type="text" class="form-control
                    @if($brought7 == 'slovacko judge')
                        bg-success
                    @elseif(Str::contains($brought7, ['slo', 'jud']))
                        bg-warning
                    @elseif(($brought7 != NULL) && !Str::contains($brought7, ['slo', 'jud']))
                        bg-danger
                    @endif" style="text-transform:uppercase">
                </div>
            </td>
            <td>
                <div class="input-group">
                    <input wire:model="borrowed7" type="text" class="form-control
                    @if($borrowed7 == 'dame commissar')
                        bg-success
                    @elseif(Str::contains($borrowed7, ['dam', 'com']))
                        bg-warning
                    @elseif(($borrowed7 != NULL) && !Str::contains($borrowed7, ['dam', 'com']))
                        bg-danger
                    @endif" style="text-transform:uppercase">
                </div>
            </td>
        </tr>
        <tr>
            <td>
                <div class="input-group">
                    <input wire:model="name8" type="text" class="form-control
                    @if($name8 == 'pamela and paul swains' || $name8 == 'paul and pamela swains')
                        bg-success
                    @elseif(Str::contains($name8, ['pamela', 'paul', 'swains']))
                        bg-warning
                    @elseif(($name8 != NULL) && !Str::contains($name8, ['pamela', 'paul', 'swains']))
                        bg-danger
                    @endif" style="text-transform:uppercase">
                </div>
            </td>
            <td>
                <div class="input-group">
                    <input wire:model="occupation8" type="text" class="form-control
                    @if($occupation8 == 'shoppers')
                        bg-success
                    @elseif(Str::contains($occupation8, ['shop']))
                        bg-warning
                    @elseif(($occupation8 != NULL) && !Str::contains($occupation8, ['shop']))
                        bg-danger
                    @endif" style="text-transform:uppercase">
                </div>
            </td>
            <td>
                <div class="input-group">
                    <input wire:model="colour8" type="text" class="form-control
                    @if($colour8 == 'green')
                        bg-success
                    @elseif(Str::contains($colour8, ['gr', 'gre']))
                        bg-warning
                    @elseif(($colour8 != NULL) && !Str::contains($colour8, ['gr', 'gre']))
                        bg-danger
                    @endif" style="text-transform:uppercase">
                </div>
            </td>
            <td>
                <div class="input-group">
                    <input wire:model="car8" type="text" class="form-control
                    @if($car8 == 'renault')
                        bg-success
                    @elseif(Str::contains($car8, ['ren', 'aul']))
                        bg-warning
                    @elseif(($car8 != NULL) && !Str::contains($car8, ['ren', 'aul']))
                        bg-danger
                    @endif" style="text-transform:uppercase">
                </div>
            </td>
            <td>
                <div class="input-group">
                    <input wire:model="brought8" type="text" class="form-control
                    @if($brought8 == 'grandfather joseph')
                        bg-success
                    @elseif(Str::contains($brought8, ['gra', 'jos']))
                        bg-warning
                    @elseif(($brought8 != NULL) && !Str::contains($brought8, ['gra', 'jos']))
                        bg-danger
                    @endif" style="text-transform:uppercase">
                </div>
            </td>
            <td>
                <div class="input-group">
                    <input wire:model="borrowed8" type="text" class="form-control
                    @if($borrowed8 == 'the seadog')
                        bg-success
                    @elseif(Str::contains($borrowed8, ['th', 'sea']))
                        bg-warning
                    @elseif(($borrowed8 != NULL) && !Str::contains($borrowed8, ['th', 'sea']))
                        bg-danger
                    @endif" style="text-transform:uppercase">
                </div>
            </td>
        </tr>
    </tbody>
</table>
