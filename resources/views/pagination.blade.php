<nav>
  <ul class="pagination">
    <li ng-class="list.prev(page)" ng-click="list.prevPage()">
      <a href="" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
   <li ng-repeat="page in list.pages track by $index" ng-class="list.active(page)" > <a href="" ng-click="list.getProgram(list.letter ,page)"  > [[ page ]] </a></li>
    <li  ng-class="list.next(page)" ng-click="list.nextPage()">
      <a href="" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>