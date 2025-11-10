@extends('layouts.app')

@section('title', 'Apply Now')

@section('content')
<div class="container mx-auto px-4 py-12 max-w-lg">
    <h1 class="text-3xl font-bold mb-6 text-center text-blue-700">Apply Now</h1>
    @if(session('success'))
        <div class="mb-6 p-4 bg-green-100 border border-green-400 text-green-700 rounded">
            {{ session('success') }}
        </div>
    @endif
    
    @if($errors->any())
        <div class="mb-6 p-4 bg-red-100 border border-red-400 text-red-700 rounded">
            <p class="font-bold mb-2">Please fix the following errors:</p>
            <ul class="list-disc list-inside">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="{{ route('applications.store') }}" method="POST"
        class="bg-white p-8 rounded-lg shadow-lg space-y-6">
        @csrf
        <div>
            <label class="block mb-1 font-semibold" for="name">Full Name</label>
            <input type="text" name="name" id="name" required
                class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
        </div>
        <div>
            <label class="block mb-1 font-semibold" for="email">Email <span class="text-red-500">*</span></label>
            <input type="email" name="email" id="email" required
                pattern="[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$"
                class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400"
                placeholder="example@email.com">
            <p id="email-error" class="text-xs text-red-500 mt-1 hidden">Please enter a valid email address</p>
            <p id="email-success" class="text-xs text-green-600 mt-1 hidden">✓ Valid email format</p>
            <p class="text-xs text-gray-500 mt-1">Enter a valid email address (e.g., user@example.com)</p>
        </div>
        
        <!-- Phone with Country Code -->
        <div>
            <label class="block mb-1 font-semibold" for="phone">Phone Number <span class="text-red-500">*</span></label>
            <div class="flex gap-2">
                <select name="phone_country_code" id="phone_country_code" required
                    class="w-2/5 px-3 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400 bg-white">
                    <option value="">Select Code</option>
                    <option value="+880">🇧🇩 BD: +880</option>
                    <option value="+1">🇺🇸 US: +1</option>
                    <option value="+44">🇬🇧 GB: +44</option>
                    <option value="+61">🇦🇺 AU: +61</option>
                    <option value="+1">🇨🇦 CA: +1</option>
                    <option value="+49">🇩🇪 DE: +49</option>
                    <option value="+33">🇫🇷 FR: +33</option>
                    <option value="+91">🇮🇳 IN: +91</option>
                    <option value="+86">🇨🇳 CN: +86</option>
                    <option value="+81">🇯🇵 JP: +81</option>
                    <option value="+82">🇰🇷 KR: +82</option>
                    <option value="+92">🇵🇰 PK: +92</option>
                    <option value="+977">🇳🇵 NP: +977</option>
                    <option value="+94">🇱🇰 LK: +94</option>
                    <option value="+60">🇲🇾 MY: +60</option>
                    <option value="+65">🇸🇬 SG: +65</option>
                    <option value="+66">🇹🇭 TH: +66</option>
                    <option value="+84">🇻🇳 VN: +84</option>
                    <option value="+63">🇵🇭 PH: +63</option>
                    <option value="+62">🇮🇩 ID: +62</option>
                    <option value="+971">🇦🇪 AE: +971</option>
                    <option value="+966">🇸🇦 SA: +966</option>
                    <option value="+974">🇶🇦 QA: +974</option>
                    <option value="+965">🇰🇼 KW: +965</option>
                    <option value="+968">🇴🇲 OM: +968</option>
                    <option value="+20">🇪🇬 EG: +20</option>
                    <option value="+27">🇿🇦 ZA: +27</option>
                    <option value="+234">🇳🇬 NG: +234</option>
                    <option value="+254">🇰🇪 KE: +254</option>
                    <option value="+39">🇮🇹 IT: +39</option>
                    <option value="+34">🇪🇸 ES: +34</option>
                    <option value="+31">🇳🇱 NL: +31</option>
                    <option value="+46">🇸🇪 SE: +46</option>
                    <option value="+47">🇳🇴 NO: +47</option>
                    <option value="+45">🇩🇰 DK: +45</option>
                    <option value="+358">🇫🇮 FI: +358</option>
                    <option value="+41">🇨🇭 CH: +41</option>
                    <option value="+43">🇦🇹 AT: +43</option>
                    <option value="+32">🇧🇪 BE: +32</option>
                    <option value="+48">🇵🇱 PL: +48</option>
                    <option value="+351">🇵🇹 PT: +351</option>
                    <option value="+30">🇬🇷 GR: +30</option>
                    <option value="+64">🇳🇿 NZ: +64</option>
                    <option value="+55">🇧🇷 BR: +55</option>
                    <option value="+52">🇲🇽 MX: +52</option>
                    <option value="+54">🇦🇷 AR: +54</option>
                    <option value="+56">🇨🇱 CL: +56</option>
                    <option value="+57">🇨🇴 CO: +57</option>
                    <option value="+7">🇷🇺 RU: +7</option>
                    <option value="+90">🇹🇷 TR: +90</option>
                </select>
                <input type="tel" name="phone" id="phone" required
                    placeholder="Enter your phone number"
                    pattern="[0-9]{6,15}"
                    class="flex-1 px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>
            <p id="phone-error" class="text-xs text-red-500 mt-1 hidden">Please enter a valid phone number (6-15 digits)</p>
            <p id="phone-success" class="text-xs text-green-600 mt-1 hidden">✓ Valid phone number</p>
            <p class="text-xs text-gray-500 mt-1">Enter numbers only (6-15 digits)</p>
        </div>
        
        <!-- Date of Birth -->
        <div>
            <label class="block mb-1 font-semibold" for="date_of_birth">Date of Birth <span class="text-red-500">*</span></label>
            <input type="date" name="date_of_birth" id="date_of_birth" required
                max="{{ date('Y-m-d', strtotime('-16 years')) }}"
                class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
            <p class="text-xs text-gray-500 mt-1">You must be at least 16 years old</p>
        </div>
        
        <!-- Gender -->
        <div>
            <label class="block mb-1 font-semibold">Gender <span class="text-red-500">*</span></label>
            <div class="flex gap-4 mt-2">
                <label class="flex items-center">
                    <input type="radio" name="gender" value="male" required class="mr-2">
                    <span>Male</span>
                </label>
                <label class="flex items-center">
                    <input type="radio" name="gender" value="female" required class="mr-2">
                    <span>Female</span>
                </label>
                <label class="flex items-center">
                    <input type="radio" name="gender" value="other" required class="mr-2">
                    <span>Other</span>
                </label>
            </div>
        </div>
        
        <!-- Address -->
        <div>
            <label class="block mb-1 font-semibold" for="address">Current Address <span class="text-red-500">*</span></label>
            <textarea name="address" id="address" rows="2" required
                minlength="10"
                class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400"
                placeholder="Enter your complete address"></textarea>
            <p id="address-error" class="text-xs text-red-500 mt-1 hidden">Address must be at least 10 characters</p>
            <p class="text-xs text-gray-500 mt-1">Minimum 10 characters</p>
        </div>
        
        <!-- Passport Number -->
        <div>
            <label class="block mb-1 font-semibold" for="passport_number">Passport Number</label>
            <input type="text" name="passport_number" id="passport_number"
                pattern="[A-Z0-9]{6,12}"
                class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400"
                placeholder="e.g., A12345678">
            <p id="passport-error" class="text-xs text-red-500 mt-1 hidden">Invalid passport format (6-12 alphanumeric characters)</p>
            <p class="text-xs text-gray-500 mt-1">Optional: 6-12 alphanumeric characters</p>
        </div>
        
        <!-- Highest Education Level -->
        <div>
            <label class="block mb-1 font-semibold" for="education_level">Highest Education Level <span class="text-red-500">*</span></label>
            <select name="education_level" id="education_level" required
                class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400 bg-white">
                <option value="">Select your education level</option>
                <option value="high_school">High School / Secondary</option>
                <option value="diploma">Diploma</option>
                <option value="bachelor">Bachelor's Degree</option>
                <option value="master">Master's Degree</option>
                <option value="doctorate">Doctorate / PhD</option>
                <option value="other">Other</option>
            </select>
        </div>
        
        <!-- English Proficiency -->
        <div>
            <label class="block mb-1 font-semibold" for="english_proficiency">English Proficiency Test</label>
            <select name="english_proficiency" id="english_proficiency"
                class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400 bg-white">
                <option value="">Select test (if taken)</option>
                <option value="ielts">IELTS</option>
                <option value="toefl">TOEFL</option>
                <option value="pte">PTE</option>
                <option value="duolingo">Duolingo</option>
                <option value="not_taken">Not Taken Yet</option>
            </select>
        </div>
        
        <!-- Test Score -->
        <div id="test-score-container" class="hidden">
            <label class="block mb-1 font-semibold" for="test_score">Test Score</label>
            <input type="text" name="test_score" id="test_score"
                pattern="[0-9.]{1,5}"
                class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400"
                placeholder="e.g., 7.5 or 90">
            <p class="text-xs text-gray-500 mt-1">Enter your overall score</p>
        </div>
        
        <!-- Intended Program -->
        <div>
            <label class="block mb-1 font-semibold" for="intended_program">Intended Program <span class="text-red-500">*</span></label>
            <select name="intended_program" id="intended_program" required
                class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400 bg-white">
                <option value="">Select program type</option>
                <option value="undergraduate">Undergraduate / Bachelor's</option>
                <option value="postgraduate">Postgraduate / Master's</option>
                <option value="doctorate">Doctorate / PhD</option>
                <option value="diploma">Diploma</option>
                <option value="certificate">Certificate</option>
                <option value="language">Language Course</option>
            </select>
        </div>
        
        <!-- Intake Year -->
        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="block mb-1 font-semibold" for="intake_year">Intake Year <span class="text-red-500">*</span></label>
                <select name="intake_year" id="intake_year" required
                    class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400 bg-white">
                    <option value="">Select year</option>
                    <option value="2025">2025</option>
                    <option value="2026">2026</option>
                    <option value="2027">2027</option>
                </select>
            </div>
            <div>
                <label class="block mb-1 font-semibold" for="intake_month">Intake Month <span class="text-red-500">*</span></label>
                <select name="intake_month" id="intake_month" required
                    class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400 bg-white">
                    <option value="">Select month</option>
                    <option value="January">January</option>
                    <option value="February">February</option>
                    <option value="March">March</option>
                    <option value="April">April</option>
                    <option value="May">May</option>
                    <option value="June">June</option>
                    <option value="July">July</option>
                    <option value="August">August</option>
                    <option value="September">September</option>
                    <option value="October">October</option>
                    <option value="November">November</option>
                    <option value="December">December</option>
                </select>
            </div>
        </div>
        
        <!-- Source and Destination Country -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="block mb-1 font-semibold" for="source_country">From Country (Source)</label>
                <select name="source_country" id="source_country" required
                    class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400 bg-white">
                    <option value="">Select your country</option>
                    @foreach($countries as $country)
                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label class="block mb-1 font-semibold" for="destination_country">To Country (Destination)</label>
                <select name="destination_country" id="destination_country" required
                    class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400 bg-white">
                    <option value="">Select destination</option>
                    @foreach($countries as $country)
                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        
        <div>
            <label class="block mb-1 font-semibold" for="course">Course</label>
            <input type="text" name="course" id="course"
                class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
        </div>
        <div>
            <label class="block mb-1 font-semibold" for="message">Message</label>
            <textarea name="message" id="message" rows="3"
                class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400"></textarea>
        </div>
        <button type="submit"
            class="w-full bg-blue-600 text-white py-3 rounded font-bold hover:bg-blue-700 transition">Submit
            Application</button>
    </form>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const emailInput = document.getElementById('email');
    const emailError = document.getElementById('email-error');
    const emailSuccess = document.getElementById('email-success');
    const phoneInput = document.getElementById('phone');
    const phoneError = document.getElementById('phone-error');
    const phoneSuccess = document.getElementById('phone-success');
    const addressInput = document.getElementById('address');
    const addressError = document.getElementById('address-error');
    const passportInput = document.getElementById('passport_number');
    const passportError = document.getElementById('passport-error');
    const englishProficiency = document.getElementById('english_proficiency');
    const testScoreContainer = document.getElementById('test-score-container');
    
    // Email validation regex pattern
    const emailPattern = /^[a-z0-9._%+\-]+@[a-z0-9.\-]+\.[a-z]{2,}$/i;
    
    // Phone validation regex (6-15 digits only)
    const phonePattern = /^[0-9]{6,15}$/;
    
    // Passport validation (6-12 alphanumeric)
    const passportPattern = /^[A-Z0-9]{6,12}$/i;
    
    // Real-time email validation
    emailInput.addEventListener('input', function() {
        const email = this.value.trim();
        
        if (email === '') {
            emailError.classList.add('hidden');
            emailSuccess.classList.add('hidden');
            emailInput.classList.remove('border-red-500', 'border-green-500');
            return;
        }
        
        if (emailPattern.test(email)) {
            emailError.classList.add('hidden');
            emailSuccess.classList.remove('hidden');
            emailInput.classList.remove('border-red-500');
            emailInput.classList.add('border-green-500');
        } else {
            emailError.classList.remove('hidden');
            emailSuccess.classList.add('hidden');
            emailInput.classList.remove('border-green-500');
            emailInput.classList.add('border-red-500');
        }
    });
    
    // Real-time phone validation
    phoneInput.addEventListener('input', function() {
        // Allow only numbers
        this.value = this.value.replace(/[^0-9]/g, '');
        
        const phone = this.value;
        
        if (phone === '') {
            phoneError.classList.add('hidden');
            phoneSuccess.classList.add('hidden');
            phoneInput.classList.remove('border-red-500', 'border-green-500');
            return;
        }
        
        if (phonePattern.test(phone)) {
            phoneError.classList.add('hidden');
            phoneSuccess.classList.remove('hidden');
            phoneInput.classList.remove('border-red-500');
            phoneInput.classList.add('border-green-500');
        } else {
            phoneError.classList.remove('hidden');
            phoneSuccess.classList.add('hidden');
            phoneInput.classList.remove('border-green-500');
            phoneInput.classList.add('border-red-500');
        }
    });
    
    // Address validation
    addressInput.addEventListener('input', function() {
        const address = this.value.trim();
        
        if (address.length >= 10) {
            addressError.classList.add('hidden');
            addressInput.classList.remove('border-red-500');
            addressInput.classList.add('border-green-500');
        } else if (address.length > 0) {
            addressError.classList.remove('hidden');
            addressInput.classList.remove('border-green-500');
            addressInput.classList.add('border-red-500');
        } else {
            addressError.classList.add('hidden');
            addressInput.classList.remove('border-red-500', 'border-green-500');
        }
    });
    
    // Passport validation
    passportInput.addEventListener('input', function() {
        // Convert to uppercase
        this.value = this.value.toUpperCase().replace(/[^A-Z0-9]/g, '');
        
        const passport = this.value;
        
        if (passport === '') {
            passportError.classList.add('hidden');
            passportInput.classList.remove('border-red-500', 'border-green-500');
            return;
        }
        
        if (passportPattern.test(passport)) {
            passportError.classList.add('hidden');
            passportInput.classList.remove('border-red-500');
            passportInput.classList.add('border-green-500');
        } else {
            passportError.classList.remove('hidden');
            passportInput.classList.remove('border-green-500');
            passportInput.classList.add('border-red-500');
        }
    });
    
    // Show/hide test score field based on English proficiency selection
    englishProficiency.addEventListener('change', function() {
        if (this.value && this.value !== 'not_taken') {
            testScoreContainer.classList.remove('hidden');
        } else {
            testScoreContainer.classList.add('hidden');
            document.getElementById('test_score').value = '';
        }
    });
    
    // Form submission validation
    const form = emailInput.closest('form');
    form.addEventListener('submit', function(e) {
        let isValid = true;
        let errorMessage = '';
        
        // Email validation
        const email = emailInput.value.trim();
        if (!emailPattern.test(email)) {
            isValid = false;
            errorMessage += '- Valid email address is required\n';
            emailInput.classList.add('border-red-500');
        }
        
        // Phone validation
        const phone = phoneInput.value.trim();
        if (!phonePattern.test(phone)) {
            isValid = false;
            errorMessage += '- Valid phone number (6-15 digits) is required\n';
            phoneInput.classList.add('border-red-500');
        }
        
        // Address validation
        const address = addressInput.value.trim();
        if (address.length < 10) {
            isValid = false;
            errorMessage += '- Address must be at least 10 characters\n';
            addressInput.classList.add('border-red-500');
        }
        
        // Passport validation (if provided)
        const passport = passportInput.value.trim();
        if (passport && !passportPattern.test(passport)) {
            isValid = false;
            errorMessage += '- Invalid passport format (6-12 alphanumeric)\n';
            passportInput.classList.add('border-red-500');
        }
        
        if (!isValid) {
            e.preventDefault();
            alert('Please fix the following errors:\n\n' + errorMessage);
            return false;
        }
    });
});
</script>

@endsection
