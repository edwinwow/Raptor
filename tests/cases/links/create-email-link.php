<!doctype html>
<html>
<head>
    <script type="text/javascript" src="../../js/case.js"></script>
    <?php $uri = '../../../src/'; include '../../../src/include.php'; ?>
</head>
<body class="simple">
    <script type="text/javascript">
        rangy.init();
    </script>
    <div class="test-1">
        <h1>Create Link Button 1: Word Group Selection</h1>
        <div class="test-input">
            <div class="editible">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                    convallis {dui id erat pellentesque et rhoncus} nunc semper. Suspendisse
                    malesuada hendrerit velit nec tristique. Aliquam gravida mauris at
                    ligula venenatis rhoncus. Suspendisse interdum, nisi nec consectetur
                    pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.
                </p>
            </div>
        </div>
        <div class="test-expected">
            <div class="editible">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                    convallis <a href=".">{dui id erat pellentesque et rhoncus}</a> nunc semper. Suspendisse
                    malesuada hendrerit velit nec tristique. Aliquam gravida mauris at
                    ligula venenatis rhoncus. Suspendisse interdum, nisi nec consectetur
                    pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.
                </p>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        testEditor('.test-1', function(input) {
            var createLinkButton = input.find('.editible').data('raptor').getLayout().getElement().find('.raptor-ui-link-create');
            var removeLinkButton = input.find('.editible').data('raptor').getLayout().getElement().find('.raptor-ui-link-remove');
            
            createLinkButton.trigger('click');
            
            var linkType = $('.raptor-ui-link-create-menu');
            linkType.value = 2;
            
            var linkInput = document.getElementById('raptor-external-href');
            
            linkInput.value = "test@test.com"; 
            
            var insertLinkButton = $('.raptor-ui-link-create-dialog button:contains(Insert Link)');
            console.log(insertLinkButton);    
            insertLinkButton.trigger('click');
            
            rangesToTokens(rangy.getSelection().getAllRanges());
            
            if (!createLinkButton.is('.ui-state-highlight')){
                throw new Error('Create link button is not active');
            }
            if (!removeLinkButton.is('.ui-state-highlight')){
                throw new Error('Remove link button is not active');
            }
        });
    </script>

    <div class="test-2">
        <h1>Create Link Button 2: Single Word Selection</h1>
        <div class="test-input">
            <div class="editible">
                <p>
                    Lorem ipsum dolor sit amet, consectetur {adipiscing} elit. Maecenas
                    convallis dui id erat pellentesque et rhoncus nunc semper. Suspendisse
                    malesuada hendrerit velit nec tristique. Aliquam gravida mauris at
                    ligula venenatis rhoncus. Suspendisse interdum, nisi nec consectetur
                    pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.
                </p>
            </div>
        </div>
        <div class="test-expected">
            <div class="editible">
                <p>
                    Lorem ipsum dolor sit amet, consectetur <a href=".">{adipiscing}</a> elit. Maecenas
                    convallis dui id erat pellentesque et rhoncus nunc semper. Suspendisse
                    malesuada hendrerit velit nec tristique. Aliquam gravida mauris at
                    ligula venenatis rhoncus. Suspendisse interdum, nisi nec consectetur
                    pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.
                </p>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        testEditor('.test-2', function(input) {
            var createLinkButton = input.find('.editible').data('raptor').getLayout().getElement().find('.raptor-ui-link-create');
            var removeLinkButton = input.find('.editible').data('raptor').getLayout().getElement().find('.raptor-ui-link-remove');
            
            createLinkButton.trigger('click');
            
            var linkType = $('.raptor-ui-link-create-menu');
            linkType.value = 2;
            
            var linkInput = document.getElementById('raptor-external-href');
            
            linkInput.value = "test@test.com"; 
            
            var insertLinkButton = $('.raptor-ui-link-create-dialog button:contains(Insert Link)');
            console.log(insertLinkButton);    
            insertLinkButton.trigger('click');
            
            rangesToTokens(rangy.getSelection().getAllRanges());
            
            if (!createLinkButton.is('.ui-state-highlight')){
                throw new Error('Create link button is not active');
            }
            if (!removeLinkButton.is('.ui-state-highlight')){
                throw new Error('Remove link button is not active');
            }
        });
    </script>

    <div class="test-3">
        <h1>Create Link Button 3: Part Word Selection</h1>
        <div class="test-input">
            <div class="editible">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                    convallis dui id erat pel{lentesqu}e et rhoncus nunc semper. Suspendisse
                    malesuada hendrerit velit nec tristique. Aliquam gravida mauris at
                    ligula venenatis rhoncus. Suspendisse interdum, nisi nec consectetur
                    pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.
                </p>
            </div>
        </div>
        <div class="test-expected">
            <div class="editible">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                    convallis dui id erat pel<a href=".">{lentesqu}</a>e et rhoncus nunc semper. Suspendisse
                    malesuada hendrerit velit nec tristique. Aliquam gravida mauris at
                    ligula venenatis rhoncus. Suspendisse interdum, nisi nec consectetur
                    pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.
                </p>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        testEditor('.test-3', function(input) {
            var createLinkButton = input.find('.editible').data('raptor').getLayout().getElement().find('.raptor-ui-link-create');
            var removeLinkButton = input.find('.editible').data('raptor').getLayout().getElement().find('.raptor-ui-link-remove');
            
            createLinkButton.trigger('click');
            
            var linkType = $('.raptor-ui-link-create-menu');
            linkType.value = 2;
            
            var linkInput = document.getElementById('raptor-external-href');
            
            linkInput.value = "test@test.com"; 
            
            var insertLinkButton = $('.raptor-ui-link-create-dialog button:contains(Insert Link)');
            console.log(insertLinkButton);    
            insertLinkButton.trigger('click');
            
            rangesToTokens(rangy.getSelection().getAllRanges());
            
            if (!createLinkButton.is('.ui-state-highlight')){
                throw new Error('Create link button is not active');
            }
            if (!removeLinkButton.is('.ui-state-highlight')){
                throw new Error('Remove link button is not active');
            }
        });
    </script>

     <div class="test-4">
        <h1>Create Link Button 4: Multi-Paragraph Selection</h1>
        <div class="test-input">
            <div class="editible">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                    convallis dui {id erat pellentesque et rhoncus nunc semper. Suspendisse
                    malesuada hendrerit velit nec tristique.
                </p>
                <p>
                    Aliquam gravida mauris at
                    ligula venenatis rhoncus. Suspendisse} interdum, nisi nec consectetur
                    pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.
                </p>
            </div>
        </div>
        <div class="test-expected">
            <div class="editible">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                    convallis dui <a href=".">{id erat pellentesque et rhoncus nunc semper. Suspendisse
                    malesuada hendrerit velit nec tristique.
                </a></p>
                <p><a href=".">
                    Aliquam gravida mauris at
                    ligula venenatis rhoncus. Suspendisse}</a> interdum, nisi nec consectetur
                    pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.
                </p>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        testEditor('.test-4', function(input) {
            var createLinkButton = input.find('.editible').data('raptor').getLayout().getElement().find('.raptor-ui-link-create');
            var removeLinkButton = input.find('.editible').data('raptor').getLayout().getElement().find('.raptor-ui-link-remove');
            
            createLinkButton.trigger('click');
            
            var linkType = $('.raptor-ui-link-create-menu');
            linkType.value = 2;
            
            var linkInput = document.getElementById('raptor-external-href');
            
            linkInput.value = "test@test.com"; 
            
            var insertLinkButton = $('.raptor-ui-link-create-dialog button:contains(Insert Link)');
            console.log(insertLinkButton);    
            insertLinkButton.trigger('click');
            
            rangesToTokens(rangy.getSelection().getAllRanges());
            
            if (!createLinkButton.is('.ui-state-highlight')){
                throw new Error('Create link button is not active');
            }
            if (!removeLinkButton.is('.ui-state-highlight')){
                throw new Error('Remove link button is not active');
            }
        });
    </script>

    <div class="test-5">
        <h1>Create Link Button 5: Paragraph Selection</h1>
        <div class="test-input">
            <div class="editible">
                <p>
                    {Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                    convallis dui id erat pellentesque et rhoncus nunc semper. Suspendisse
                    malesuada hendrerit velit nec tristique.
                </p><p>
                    Aliquam gravida mauris at
                    ligula venenatis rhoncus. Suspendisse interdum, nisi nec consectetur
                    pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.}
                </p>
            </div>
        </div>
        <div class="test-expected">
            <div class="editible">
                <p>
                    <a href=".">{Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                    convallis dui id erat pellentesque et rhoncus nunc semper. Suspendisse
                    malesuada hendrerit velit nec tristique.
                </a></p>
                <p><a href=".">
                    Aliquam gravida mauris at
                    ligula venenatis rhoncus. Suspendisse interdum, nisi nec consectetur
                    pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.}</a>
                </p>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        testEditor('.test-5', function(input) {
            var createLinkButton = input.find('.editible').data('raptor').getLayout().getElement().find('.raptor-ui-link-create');
            var removeLinkButton = input.find('.editible').data('raptor').getLayout().getElement().find('.raptor-ui-link-remove');
            
            createLinkButton.trigger('click');
            
            var linkType = $('.raptor-ui-link-create-menu');
            linkType.value = 2;
            
            var linkInput = document.getElementById('raptor-external-href');
            
            linkInput.value = "test@test.com"; 
            
            var insertLinkButton = $('.raptor-ui-link-create-dialog button:contains(Insert Link)');
            console.log(insertLinkButton);    
            insertLinkButton.trigger('click');
            
            rangesToTokens(rangy.getSelection().getAllRanges());
            
            if (!createLinkButton.is('.ui-state-highlight')){
                throw new Error('Create link button is not active');
            }
            if (!removeLinkButton.is('.ui-state-highlight')){
                throw new Error('Remove link button is not active');
            }
        });
    </script>

    <div class="test-6">
        <h1>Create Link Button 6: Empty Selection in Word</h1>
        <div class="test-input">
            <div class="editible">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                    convallis dui id erat pellentesque et rhoncus nunc semper. Suspendisse
                    malesuada hendrerit velit nec tristique.
                </p><p>
                    Aliquam gravida mauris at
                    ligula venenatis rhoncus. Suspen{}disse interdum, nisi nec consectetur
                    pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.
                </p>
            </div>
        </div>
        <div class="test-expected">
            <div class="editible">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                    convallis dui id erat pellentesque et rhoncus nunc semper. Suspendisse
                    malesuada hendrerit velit nec tristique.
                </p><p>
                    Aliquam gravida mauris at
                    ligula venenatis rhoncus. <a href=".">{Suspendisse}</a> interdum, nisi nec consectetur
                    pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.
                </p>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        testEditor('.test-6', function(input) {
            var createLinkButton = input.find('.editible').data('raptor').getLayout().getElement().find('.raptor-ui-link-create');
            var removeLinkButton = input.find('.editible').data('raptor').getLayout().getElement().find('.raptor-ui-link-remove');
            
            createLinkButton.trigger('click');
            
            var linkType = $('.raptor-ui-link-create-menu');
            linkType.value = 2;
            
            var linkInput = document.getElementById('raptor-external-href');
            
            linkInput.value = "test@test.com"; 
            
            var insertLinkButton = $('.raptor-ui-link-create-dialog button:contains(Insert Link)');
            console.log(insertLinkButton);    
            insertLinkButton.trigger('click');
            
            rangesToTokens(rangy.getSelection().getAllRanges());
            
            if (!createLinkButton.is('.ui-state-highlight')){
                throw new Error('Create link button is not active');
            }
            if (!removeLinkButton.is('.ui-state-highlight')){
                throw new Error('Remove link button is not active');
            }
        });
    </script>

    <div class="test-7">
        <h1>Create Link Button 7: Empty Selection at the Beginning of a Word</h1>
        <div class="test-input">
            <div class="editible">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                    convallis dui id erat pellentesque et rhoncus nunc semper. Suspendisse
                    malesuada {}hendrerit velit nec tristique.
                </p><p>
                    Aliquam gravida mauris at
                    ligula venenatis rhoncus. Suspendisse interdum, nisi nec consectetur
                    pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.
                </p>
            </div>
        </div>
        <div class="test-expected">
            <div class="editible">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas
                    convallis dui id erat pellentesque et rhoncus nunc semper. Suspendisse
                    malesuada <a href=".">{hendrerit}</a> velit nec tristique.
                </p><p>
                    Aliquam gravida mauris at
                    ligula venenatis rhoncus. Suspendisse interdum, nisi nec consectetur
                    pulvinar, lorem augue ornare felis, vel lacinia erat nibh in velit.
                </p>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        testEditor('.test-7', function(input) {
            var createLinkButton = input.find('.editible').data('raptor').getLayout().getElement().find('.raptor-ui-link-create');
            var removeLinkButton = input.find('.editible').data('raptor').getLayout().getElement().find('.raptor-ui-link-remove');
            
            createLinkButton.trigger('click');
            
            var linkType = $('.raptor-ui-link-create-menu');
            linkType.value = 2;
            
            var linkInput = document.getElementById('raptor-external-href');
            
            linkInput.value = "test@test.com"; 
            
            var insertLinkButton = $('.raptor-ui-link-create-dialog button:contains(Insert Link)');
            console.log(insertLinkButton);    
            insertLinkButton.trigger('click');
            
            rangesToTokens(rangy.getSelection().getAllRanges());
            
            if (!createLinkButton.is('.ui-state-highlight')){
                throw new Error('Create link button is not active');
            }
            if (!removeLinkButton.is('.ui-state-highlight')){
                throw new Error('Remove link button is not active');
            }
        });
    </script>
    
    <div class="test-8">
        <h1>Create Link Button 8: Selected Image</h1>
        <div class="test-input">
            <div class="editible">
                <p>
                    {<img src="../../images/raptor.png" alt="raptor logo" height="50" width="40" />}
                </p>
            </div>
        </div>
        <div class="test-expected">
            <div class="editible">
                <p>
                    <a href=". ">{<img src="../../images/raptor.png" alt="raptor logo" height="50" width="40" />}</a>
                </p>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        testEditor('.test-8', function(input) {
            var createLinkButton = input.find('.editible').data('raptor').getLayout().getElement().find('.raptor-ui-link-create');
            var removeLinkButton = input.find('.editible').data('raptor').getLayout().getElement().find('.raptor-ui-link-remove');
            
            createLinkButton.trigger('click');
            
            var linkType = $('.raptor-ui-link-create-menu');
            linkType.value = 2;
            
            var linkInput = document.getElementById('raptor-external-href');
            
            linkInput.value = "test@test.com"; 
            
            var insertLinkButton = $('.raptor-ui-link-create-dialog button:contains(Insert Link)');
            console.log(insertLinkButton);    
            insertLinkButton.trigger('click');
            
            rangesToTokens(rangy.getSelection().getAllRanges());
            
            if (!createLinkButton.is('.ui-state-highlight')){
                throw new Error('Create link button is not active');
            }
            if (!removeLinkButton.is('.ui-state-highlight')){
                throw new Error('Remove link button is not active');
            }
        });
    </script>
    
    <div class="test-9">
        <h1>Create Link Button 9: Ordered List</h1>
        <div class="test-input">
            <div class="editible">
                <ol>
                    <li>Item 1</li>
                    <li>{Item 2 is a link}</li>
                    <li>Item 3</li>
                    <li>Item 4</li>
                </ol>
            </div>
        </div>
        <div class="test-expected">
            <div class="editible">
                <ol>
                    <li>Item 1</li>
                    <li><a href=".">Item 2 is a link</a></li>
                    <li>Item 3</li>
                    <li>Item 4</li>
                </ol>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        testEditor('.test-9', function(input) {
            var createLinkButton = input.find('.editible').data('raptor').getLayout().getElement().find('.raptor-ui-link-create');
            var removeLinkButton = input.find('.editible').data('raptor').getLayout().getElement().find('.raptor-ui-link-remove');
            
            createLinkButton.trigger('click');
            
            var linkType = $('.raptor-ui-link-create-menu');
            linkType.value = 2;
            
            var linkInput = document.getElementById('raptor-external-href');
            
            linkInput.value = "test@test.com"; 
            
            var insertLinkButton = $('.raptor-ui-link-create-dialog button:contains(Insert Link)');
            console.log(insertLinkButton);    
            insertLinkButton.trigger('click');
            
            rangesToTokens(rangy.getSelection().getAllRanges());
            
            if (!createLinkButton.is('.ui-state-highlight')){
                throw new Error('Create link button is not active');
            }
            if (!removeLinkButton.is('.ui-state-highlight')){
                throw new Error('Remove link button is not active');
            }
        });
    </script>
    
    <div class="test-10">
        <h1>Create Link Button 10: Unordered List</h1>
        <div class="test-input">
            <div class="editible">
                <ul>
                    <li>Item 1</li>
                    <li>{Item 2 is a link}</li>
                    <li>Item 3</li>
                    <li>Item 4</li>
                </ul>
            </div>
        </div>
        <div class="test-expected">
            <div class="editible">
                <ul>
                    <li>Item 1</li>
                    <li><a href=".">Item 2 is a link</a></li>
                    <li>Item 3</li>
                    <li>Item 4</li>
                </ul>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        testEditor('.test-10', function(input) {
            var createLinkButton = input.find('.editible').data('raptor').getLayout().getElement().find('.raptor-ui-link-create');
            var removeLinkButton = input.find('.editible').data('raptor').getLayout().getElement().find('.raptor-ui-link-remove');
            
            createLinkButton.trigger('click');
            
            var linkType = $('.raptor-ui-link-create-menu');
            linkType.value = 2;
            
            var linkInput = document.getElementById('raptor-external-href');
            
            linkInput.value = "test@test.com"; 
            
            var insertLinkButton = $('.raptor-ui-link-create-dialog button:contains(Insert Link)');
            console.log(insertLinkButton);    
            insertLinkButton.trigger('click');
            
            rangesToTokens(rangy.getSelection().getAllRanges());
            
            if (!createLinkButton.is('.ui-state-highlight')){
                throw new Error('Create link button is not active');
            }
            if (!removeLinkButton.is('.ui-state-highlight')){
                throw new Error('Remove link button is not active');
            }
        });
    </script>
</body>
</html>