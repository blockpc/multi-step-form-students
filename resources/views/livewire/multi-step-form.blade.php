<div class="max-w-3xl mx-auto px-4 py-10">
    <form wire:submit.prevent="register">
        {{-- Step 1 --}}
        @if ( $currentStep == 1 )
        <div class="mb-5 bg-gray-300" id="step-one">
            <div class="mb-5 bg-gray-700 p-2">
                <div class="text-md font-bold text-gray-300 leading-tight">Step 1/4 - Your Profile</div>
            </div>
            <div class="grid md:grid-cols-2 gap-4 px-4 pb-4">
                <div class="">
                    <label for="firstname" class="font-bold mb-1 text-gray-700 block">Firstname</label>
                    <input wire:model="first_name" type="text"
                        class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium @error('first_name') border border-red-600 @enderror"
                        placeholder="Enter your firstname..." id="firstname">
                        <div class="text-red-700 text-sm">@error('first_name'){{ $message }}@enderror</div>
                </div>
                <div class="">
                    <label for="lastname" class="font-bold mb-1 text-gray-700 block">Lastname</label>
                    <input wire:model="last_name" type="text"
                        class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium @error('last_name') border border-red-600 @enderror"
                        placeholder="Enter your lastname..." id="lastname">
                        <div class="text-red-700 text-sm">@error('last_name'){{ $message }}@enderror</div>
                </div>
                <div class="">
                    <label for="gender" class="font-bold mb-1 text-gray-700 block">Gender</label>
                    <select wire:model="gender" class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium @error('gender') border border-red-600 @enderror" id="gender">
                        <option value="" selected>Select One...</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                        <option value="no-binary">No Binary</option>
                    </select>
                    <div class="text-red-700 text-sm">@error('gender'){{ $message }}@enderror</div>
                </div>
                <div class="">
                    <label for="age" class="font-bold mb-1 text-gray-700 block">Age</label>
                    <input wire:model="age" type="text"
                        class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium @error('age') border border-red-600 @enderror"
                        placeholder="Enter your age..." id="age">
                        <div class="text-red-700 text-sm">@error('age'){{ $message }}@enderror</div>
                </div>
                <div class="col-span-2">
                    <label for="description" class="font-bold mb-1 text-gray-700 block">Description</label>
                    <textarea wire:model="description"
                        class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium"
                        placeholder="Enter your description..." id="description"></textarea>
                </div>
            </div>
        </div>
        @endif

        {{-- Step 2 --}}
        @if ( $currentStep == 2 )
        <div class="mb-5 bg-gray-300" id="step-two">
            <div class="mb-5 bg-gray-700 p-2">
                <div class="text-md font-bold text-gray-300 leading-tight">Step 2/4 - Address & Contacts</div>
            </div>
            <div class="grid md:grid-cols-2 gap-4 px-4 pb-4">
                <div class="">
                    <label for="email" class="font-bold mb-1 text-gray-700 block">Email Address</label>
                    <input wire:model="email" type="email"
                        class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium @error('email') border border-red-600 @enderror"
                        placeholder="Enter your email address..." id="email">
                        <div class="text-red-700 text-sm">@error('email'){{ $message }}@enderror</div>
                </div>
                <div class="">
                    <label for="phone" class="font-bold mb-1 text-gray-700 block">Phone</label>
                    <input wire:model="phone" type="text"
                        class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium @error('phone') border border-red-600 @enderror"
                        placeholder="Enter your phone..." id="phone">
                        <div class="text-red-700 text-sm">@error('phone'){{ $message }}@enderror</div>
                </div>
                <div class="">
                    <label for="country" class="font-bold mb-1 text-gray-700 block">Country</label>
                    <select wire:model="country" class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium @error('country') border border-red-600 @enderror" id="country">
                        <option value="" selected>Select One...</option>
                        <option value="chile">Chile</option>
                        <option value="argentina">Argentina</option>
                        <option value="peru">Peru</option>
                        <option value="brasil">Brasil</option>
                        <option value="colombia">Colombia</option>
                        <option value="uruguay">Uruguay</option>
                    </select>
                    <div class="text-red-700 text-sm">@error('country'){{ $message }}@enderror</div>
                </div>
                <div class="">
                    <label for="city" class="font-bold mb-1 text-gray-700 block">City</label>
                    <input wire:model="city" type="text"
                        class="w-full px-4 py-3 rounded-lg shadow-sm focus:outline-none focus:shadow-outline text-gray-600 font-medium @error('city') border border-red-600 @enderror"
                        placeholder="Enter your city..." id="city">
                        <div class="text-red-700 text-sm">@error('city'){{ $message }}@enderror</div>
                </div>
            </div>
        </div>
        @endif

        {{-- Step 3 --}}
        @if ( $currentStep == 3 )
        <div class="mb-5 bg-gray-300" id="step-three">
            <div class="mb-5 bg-gray-700 p-2">
                <div class="text-md font-bold text-gray-300 leading-tight">Step 3/4 - Frameworks Experience</div>
            </div>
            <div class="flex flex-col px-4 pb-4">
                <div class="mb-1 text-gray-700 block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore nemo accusantium eius excepturi nihil incidunt, delectus commodi ut eum fuga aliquid qui dolores magni iste veniam, maxime omnis neque repellat.</div>
                <div class="flex flex-col">
                    <label class="inline-flex items-center mt-3" for="laravel">
                        <input wire:model="frameworks" type="checkbox" class="form-checkbox h-5 w-5 text-gray-600" value="laravel" id="laravel">
                        <span class="ml-2 text-gray-700">Laravel</span>
                    </label>
                    <label class="inline-flex items-center mt-3" for="codeIgniter">
                        <input wire:model="frameworks" type="checkbox" class="form-checkbox h-5 w-5 text-gray-600" value="codeIgniter" id="codeIgniter">
                        <span class="ml-2 text-gray-700">CodeIgniter</span>
                    </label>
                    <label class="inline-flex items-center mt-3" for="symphony">
                        <input wire:model="frameworks" type="checkbox" class="form-checkbox h-5 w-5 text-gray-600" value="symphony" id="symphony">
                        <span class="ml-2 text-gray-700">Symphony</span>
                    </label>
                    <label class="inline-flex items-center mt-3" for="cakePHP">
                        <input wire:model="frameworks" type="checkbox" class="form-checkbox h-5 w-5 text-gray-600" value="cakePHP" id="cakePHP">
                        <span class="ml-2 text-gray-700">CakePHP</span>
                    </label>
                </div>
                <div class="text-red-700 text-sm">@error('frameworks'){{ $message }}@enderror</div>
                <div class="text-red-700 text-sm">@error('frameworks.*'){{ $message }}@enderror</div>
            </div>
        </div>
        @endif

        {{-- Step 4 --}}
        @if ( $currentStep == 4 )
        <div class="mb-5 bg-gray-300" id="step-four">
            <div class="mb-5 bg-gray-700 p-2">
                <div class="text-md font-bold text-gray-300 leading-tight">Step 4/4 - Attachments</div>
            </div>
            <div class="flex flex-col px-4 pb-4">
                <div class="mb-1 text-gray-700 block">Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore nemo accusantium eius excepturi nihil incidunt, delectus commodi ut eum fuga aliquid qui dolores magni iste veniam, maxime omnis neque repellat.</div>
                <div class="flex flex-col">
                    <div class="overflow-hidden relative w-64 mt-4 mb-4">
                        <button type="button" class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 w-full inline-flex items-center">
                            <svg fill="#FFF" height="18" viewBox="0 0 24 24" width="18" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 0h24v24H0z" fill="none"/>
                                <path d="M9 16h6v-6h4l-7-7-7 7h4zm-4 2h14v2H5z"/>
                            </svg>
                            <span class="ml-2">Submit your CV</span>
                        </button>
                        <input wire:model="cv" class="cursor-pointer absolute block opacity-0 top-0 w-64" type="file">
                    </div>
                    <div class="text-red-700 text-sm">@error('cv'){{ $message }}@enderror</div>
                    <label class="inline-flex items-center mt-3" for="terms">
                        <input wire:model="terms" type="checkbox" class="form-checkbox h-5 w-5 text-gray-600" value="terms" id="terms">
                        <span class="ml-2 text-gray-700">You must agree with our <a class="text-blue-600" href="#">terms and conditions</a></span>
                        <div class="text-red-700 text-sm">@error('terms'){{ $message }}@enderror</div>
                    </label>
                </div>
            </div>
        </div>
        @endif

        {{-- Actions buttons --}}
        <div class="mb-5 bg-gray-300" id="actions-buttons">
            <div class="flex justify-between p-2">
                @if ( $currentStep == 1 )
                    <div class=""></div>
                @endif
                @if ( $currentStep > 1 )
                <button wire:click="decreaseStep()" class="bg-red-500 hover:bg-red-700 text-white text-sm font-bold py-2 px-4 mx-1 rounded" type="button">Back</button>
                @endif
                @if ( $currentStep < 4 )
                <button wire:click="increaseStep()" class="bg-blue-500 hover:bg-blue-700 text-white text-sm font-bold py-2 px-4 mx-1 rounded" type="button">Next</button>
                @endif
                @if ( $currentStep == 4 )
                <button class="bg-green-500 hover:bg-green-700 text-white text-sm font-bold py-2 px-4 mx-1 rounded">Submit</button>
                @endif
            </div>
        </div>
    </form>
</div>
