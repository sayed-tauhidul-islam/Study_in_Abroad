<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function index()
    {
        return view('chat');
    }

    public function sendMessage(Request $request)
    {
        $request->validate([
            'message' => 'required|string|max:1000'
        ]);

        $message = trim($request->input('message'));

        // Generate bot response
        $response = $this->generateResponse($message);

        return response()->json(['response' => $response]);
    }

    private function generateResponse($message)
    {
        // Enhanced response logic for study abroad chatbot
        $responses = [
            // Greetings
            'hello' => 'Hello! Welcome to StudyAbroad! How can I help you with your international education journey?',
            'hi' => 'Hi there! I\'m here to assist you with all your study abroad questions.',
            'hey' => 'Hey! Ready to explore study abroad opportunities? What can I help you with?',
            'good morning' => 'Good morning! How can I assist you with your study abroad plans today?',
            'good afternoon' => 'Good afternoon! I\'m here to help with your international education questions.',
            'good evening' => 'Good evening! How can I support your study abroad journey?',

            // Help and general
            'help' => 'I can help you with: universities, courses, scholarships, visa requirements, application processes, cost information, and more. What specific topic interests you?',
            'what can you do' => 'I can provide information about universities, courses, scholarships, visa processes, admission requirements, living costs, and answer your study abroad questions.',
            'how can you help' => 'I can guide you through university selection, scholarship opportunities, visa applications, course recommendations, and answer questions about studying abroad.',

            // Universities
            'university' => 'We partner with top universities worldwide. I can help you find universities based on your field of study, location preferences, or ranking. What type of program are you interested in?',
            'universities' => 'Our database includes universities from USA, UK, Canada, Australia, Germany, and more. Would you like recommendations for a specific country or field of study?',
            'best university' => 'The "best" university depends on your goals, but top-ranked institutions include Harvard, Stanford, Oxford, Cambridge, MIT, and University of Toronto. What field interests you?',
            'ranking' => 'We work with QS World-ranked universities. Top universities include Harvard (#1), Stanford (#2), Oxford (#3), MIT (#4), Cambridge (#5), and Toronto (#6).',

            // Countries
            'usa' => 'Studying in the USA offers world-class education with diverse programs. Average tuition: $25,000-55,000/year. Popular for STEM, business, and liberal arts. OPT work program available.',
            'uk' => 'UK universities offer 9-12 month programs with post-study work visas. Average tuition: $15,000-30,000/year. Known for research excellence and shorter degree durations.',
            'canada' => 'Canada provides affordable education with pathways to PR. Average tuition: $12,000-25,000/year. PGWP allows 8-36 months of work after graduation.',
            'australia' => 'Australia combines quality education with work opportunities. Average tuition: $20,000-35,000/year. 485 visa allows 18 months (4 years for PhD) of post-study work.',
            'germany' => 'Germany offers low-cost or free education for international students. Average tuition: $0-500/year. Job Seeker visa helps find employment after studies.',
            'netherlands' => 'Dutch universities provide high-quality education in English. Average tuition: $8,000-15,000/year. Orientation Year visa for job search after graduation.',

            // Scholarships - Enhanced with detailed information
            'scholarship' => 'Scholarships are a great way to fund your study abroad journey! We offer various types including merit-based, need-based, country-specific, and specialized awards. Scholarships can cover tuition, living expenses, or both. What type of scholarship are you interested in? I can provide detailed information on eligibility, application processes, and tips to increase your chances.',
            'scholarships' => 'Our comprehensive scholarship database includes:\n\n• Merit-based scholarships (for academic excellence)\n• Need-based scholarships (for financial need)\n• Full scholarships (100% coverage)\n• Partial scholarships (25-75% coverage)\n• Government scholarships (Chevening, DAAD, Erasmus+)\n• University scholarships\n• Sports scholarships\n• Research scholarships\n• Women and minority scholarships\n• Study abroad specific scholarships\n\nMany cover 25-100% of tuition costs. Would you like details on eligibility criteria, application processes, or specific scholarship types?',
            'merit scholarship' => 'Merit scholarships reward academic excellence and achievements. \n\nEligibility:\n• Minimum GPA: 3.0-4.0 (varies by program)\n• Strong standardized test scores (SAT/ACT for undergrad, GRE/GMAT for grad)\n• English proficiency (IELTS 6.5+ or TOEFL 80+)\n• Leadership roles and extracurricular activities\n\nApplication Process:\n1. Submit academic transcripts\n2. Provide test scores\n3. Write personal statement\n4. Get letters of recommendation\n\nTips: Maintain high GPA, excel in tests, and demonstrate leadership. Many universities offer automatic merit scholarships upon admission.',
            'need based scholarship' => 'Need-based scholarships help students with financial difficulties.\n\nEligibility:\n• Demonstrated financial need\n• Family income below certain thresholds\n• Academic merit (usually GPA 2.5+)\n• Enrollment in degree program\n\nRequired Documents:\n• Financial statements\n• Tax returns\n• Bank statements\n• Essays explaining financial situation\n\nApplication Process:\n1. Complete FAFSA or equivalent form\n2. Submit financial documents\n3. Write need-based essay\n4. Provide income verification\n\nTips: Be honest about your situation and explain how the scholarship will help your education goals.',
            'full scholarship' => 'Full scholarships cover 100% of tuition and often include living expenses, making education essentially free.\n\nTypes:\n• Government scholarships (Chevening, DAAD)\n• University presidential scholarships\n• International excellence awards\n• Research fellowships\n\nEligibility:\n• Exceptional academic record (GPA 3.8+)\n• Perfect test scores\n• Strong leadership and extracurriculars\n• Research experience (for grad students)\n\nCompetition Level: Very high - awarded to top 1-5% of applicants.\n\nTips: Apply to multiple programs, prepare outstanding application materials, and consider less competitive but still prestigious alternatives.',
            'partial scholarship' => 'Partial scholarships cover a portion of your education costs (25-75%), making them more accessible than full scholarships.\n\nCoverage:\n• Tuition only: $5,000-$20,000/year\n• Tuition + living: $10,000-$30,000/year\n• Renewable annually based on performance\n\nEligibility:\n• Good academic standing (GPA 3.0+)\n• Financial need (for some programs)\n• Field of study alignment\n\nStrategy: Combine multiple partial scholarships to cover significant costs. Many students receive 50-75% coverage through various awards.\n\nTips: Apply early, meet all deadlines, and don\'t limit yourself to one scholarship.',
            'scholarship application' => 'Applying for scholarships requires careful planning and organization.\n\nStep-by-Step Process:\n1. Research scholarships 2-3 months before deadlines\n2. Check eligibility requirements thoroughly\n3. Gather required documents early\n4. Prepare compelling essays and personal statements\n5. Secure strong letters of recommendation\n6. Submit applications before deadlines\n7. Follow up if needed\n\nRequired Documents:\n• Academic transcripts\n• Standardized test scores\n• Personal statement/essays\n• Letters of recommendation\n• Financial documents (for need-based)\n• Resume/CV\n\nTips: Start early, proofread everything, and keep copies of all submissions.',
            'scholarship deadline' => 'Scholarship deadlines vary widely and are crucial to track.\n\nCommon Deadlines:\n• Undergraduate: December-March for Fall intake\n• Graduate: October-January for Fall intake\n• Government scholarships: 6-12 months before study start\n• University scholarships: Vary by institution\n\nKey Points:\n• Early deadlines for competitive scholarships\n• Rolling admissions for some programs\n• Multiple rounds for some scholarships\n• International deadlines may differ\n\nTips: Create a scholarship calendar, set reminders, and apply to programs with different deadlines to maximize opportunities.',
            'scholarship requirements' => 'Scholarship requirements vary by type and sponsor, but common criteria include:\n\nAcademic Requirements:\n• Minimum GPA: 2.5-4.0 (varies by scholarship)\n• Standardized tests: SAT/ACT, GRE/GMAT, IELTS/TOEFL\n• Academic transcripts from previous institutions\n\nPersonal Requirements:\n• Personal statement or essays\n• Letters of recommendation (2-3)\n• Resume/CV highlighting achievements\n• Leadership and extracurricular activities\n\nAdditional Requirements:\n• Financial documents (for need-based)\n• Research proposals (for research scholarships)\n• Portfolio (for arts scholarships)\n• Citizenship/residency proof\n\nTips: Research each scholarship\'s specific requirements and prepare documents in advance.',
            'how to get scholarship' => 'Increasing your scholarship chances requires strategy and preparation.\n\nAcademic Excellence:\n• Maintain high GPA throughout studies\n• Excel in standardized tests\n• Take challenging courses\n\nStrong Application:\n• Write compelling personal statements\n• Secure excellent recommendations\n• Highlight leadership and achievements\n\nStrategic Approach:\n• Apply to multiple scholarships\n• Start applications early\n• Research thoroughly\n• Meet all deadlines\n• Follow up on applications\n\nAdditional Tips:\n• Network with scholarship recipients\n• Consider less competitive scholarships\n• Apply for local and international awards\n• Don\'t get discouraged by rejections\n\nSuccess Rate: Most students receive at least one scholarship with persistent effort.',
            'scholarship amount' => 'Scholarship amounts vary widely based on the sponsor and type.\n\nAmount Ranges:\n• Small awards: $500-$2,000/year\n• Medium awards: $2,000-$10,000/year\n• Large awards: $10,000-$25,000/year\n• Major awards: $25,000+/year\n• Full coverage: $30,000-$60,000+/year (includes living expenses)\n\nCoverage Types:\n• Tuition only\n• Tuition + living expenses\n• Tuition + books + supplies\n• Stipends for research/teaching\n\nFactors Affecting Amount:\n• Academic merit\n• Financial need\n• Field of study\n• University prestige\n• Country of origin\n\nStrategy: Combine multiple scholarships to maximize coverage.',
            'international scholarship' => 'International students have access to numerous scholarship opportunities.\n\nPopular Programs:\n• DAAD (Germany) - Full funding for German studies\n• Chevening (UK) - Leadership development scholarships\n• Commonwealth Scholarships - For Commonwealth countries\n• Erasmus+ (Europe) - EU-wide mobility program\n• Australia Awards - Full scholarships for Australian study\n• New Zealand Scholarships - Government-funded awards\n\nEligibility:\n• Citizenship of eligible countries\n• Academic excellence\n• Leadership potential\n• Commitment to development goals\n\nApplication Process:\n• Country-specific applications\n• Competitive selection process\n• Interviews and assessments\n\nTips: Check your country\'s eligibility and apply through official channels.',
            'government scholarship' => 'Government-funded scholarships offer comprehensive support for international students.\n\nMajor Programs:\n• Chevening Scholarships (UK) - For master\'s studies\n• DAAD Scholarships (Germany) - Research and study awards\n• Erasmus+ (European Union) - Mobility and cooperation\n• Australia Awards - Development-focused scholarships\n• Canadian Government Scholarships - Various programs\n• US Government Programs - Through State Department\n\nBenefits:\n• Full tuition coverage\n• Living expenses stipends\n• Health insurance\n• Travel costs\n• Academic and cultural support\n\nEligibility:\n• Academic merit\n• Leadership potential\n• Development impact\n• Language proficiency\n\nApplication: Highly competitive with early deadlines.',
            'university scholarship' => 'Most universities offer their own scholarship programs for international students.\n\nTypes:\n• Admission-based scholarships (automatic with offer)\n• Merit scholarships (separate application)\n• Departmental scholarships (field-specific)\n• Alumni scholarships (for alumni children)\n• Athletic scholarships (sports performance)\n• Research scholarships (graduate level)\n\nPopular University Scholarships:\n• Harvard University Scholarships\n• Stanford University Awards\n• University of Toronto Scholarships\n• University of Melbourne Awards\n• ETH Zurich Excellence Scholarships\n\nApplication Process:\n• Some automatic with admission\n• Others require separate application\n• Deadlines vary by university\n\nTips: Check university websites and apply early.',
            'sports scholarship' => 'Sports scholarships reward athletic talent and academic achievement.\n\nAvailable In:\n• USA (NCAA Division I universities)\n• Canada (CIS universities)\n• UK (BUCS system)\n• Australia (University sports programs)\n\nRequirements:\n• Athletic excellence in your sport\n• Academic qualifications (GPA 2.5+)\n• Team fit and recruitment potential\n• Sometimes tryouts or recruitment camps\n\nCoverage:\n• Full or partial tuition\n• Living expenses\n• Training and equipment costs\n• Academic support\n\nApplication Process:\n• Contact university athletic departments\n• Attend recruitment events\n• Submit athletic and academic credentials\n• May require video submissions\n\nTips: Start early, maintain academic eligibility, and consider walk-on opportunities.',
            'research scholarship' => 'Research scholarships support graduate students conducting research.\n\nTypes:\n• University research assistantships\n• Government research grants\n• Private foundation fellowships\n• Industry-sponsored research awards\n\nBenefits:\n• Tuition waivers\n• Monthly stipends ($1,000-$3,000)\n• Research funding\n• Conference travel support\n• Health insurance\n\nEligibility:\n• Admission to graduate program\n• Research proposal\n• Faculty supervisor support\n• Academic excellence\n\nFields: STEM, Social Sciences, Humanities\n\nApplication: Through graduate admissions or separate research applications.\n\nTips: Identify research interests early and build relationships with potential supervisors.',
            'women scholarship' => 'Women-specific scholarships promote gender equality in education.\n\nOrganizations:\n• AAUW International Fellowships\n• Zonta International\n• Women in STEM scholarships\n• Leadership and business scholarships\n• Country-specific women\'s programs\n\nFocus Areas:\n• STEM fields\n• Business and leadership\n• Social sciences\n• Arts and humanities\n• Developing country students\n\nBenefits:\n• Tuition coverage\n• Living expenses\n• Leadership development\n• Networking opportunities\n\nEligibility:\n• Female gender\n• Academic merit\n• Leadership potential\n• Commitment to women\'s advancement\n\nTips: Highlight leadership and community involvement in applications.',
            'minority scholarship' => 'Minority scholarships support underrepresented and disadvantaged groups.\n\nGroups Served:\n• Ethnic minorities\n• LGBTQ+ students\n• Students with disabilities\n• First-generation students\n• Refugees and displaced persons\n• Indigenous students\n\nOrganizations:\n• UNCF (United Negro College Fund)\n• Hispanic Scholarship Fund\n• Asian American scholarships\n• Native American programs\n• Disability-specific awards\n\nCoverage:\n• Tuition assistance\n• Living expenses\n• Academic support\n• Career development\n\nApplication: Demonstrate how your background and experiences align with scholarship goals.\n\nTips: Research culturally-specific scholarships and highlight unique perspectives.',
            'study abroad scholarship' => 'Study abroad scholarships specifically fund international education experiences.\n\nTypes:\n• Cultural exchange programs\n• Bilateral government agreements\n• University study abroad offices\n• Private foundation awards\n• Short-term exchange scholarships\n\nPrograms:\n• Erasmus+ (Europe)\n• Gilman Scholarship (USA)\n• DAAD (Germany)\n• Australia\'s New Colombo Plan\n• Canada\'s International Scholarships\n\nBenefits:\n• Program fees\n• Travel costs\n• Living expenses\n• Cultural immersion activities\n\nEligibility:\n• Enrollment in home institution\n• Academic standing\n• Language proficiency\n• Cultural interest\n\nTips: Check with your university\'s study abroad office for opportunities.',
            'financial aid' => 'Financial aid encompasses various funding sources beyond scholarships.\n\nOptions:\n• Scholarships and grants (need not repay)\n• Work-study programs (part-time jobs)\n• Student loans (must repay with interest)\n• Assistantships (teaching/research)\n• Emergency funds\n\nSources:\n• University financial aid offices\n• Government student aid programs\n• Private lenders\n• Nonprofit organizations\n\nApplication:\n• FAFSA or equivalent forms\n• Demonstrate financial need\n• Provide documentation\n\nTips: Compare aid packages, understand repayment terms, and explore all options before borrowing.',
            'funding' => 'Comprehensive funding strategies for international students.\n\nSources:\n• University scholarships (30-50% coverage)\n• Government grants and scholarships\n• Private foundation awards\n• Personal savings and family support\n• Part-time work opportunities\n• Student loans (as last resort)\n\nAverage Coverage: 30-70% of total costs through various sources.\n\nStrategy:\n1. Apply for multiple scholarships\n2. Seek university funding\n3. Consider work opportunities\n4. Plan budget carefully\n5. Look for emergency funds\n\nTips: Start planning 12-18 months before study start and track all funding sources.',

            // Visa
            'visa' => 'Visa requirements vary by country. Generally need: acceptance letter, financial proof, health insurance, and language proficiency. Processing time: 2-12 weeks. Which country interests you?',
            'visa requirements' => 'Common requirements: university acceptance, proof of funds ($10,000-30,000), health insurance, accommodation proof, and language tests (IELTS/TOEFL).',
            'student visa' => 'Student visas allow full-time study and part-time work. Most countries offer post-study work options. We provide detailed visa guidance for each destination.',

            // Applications
            'application' => 'Application process: research programs, check requirements, prepare documents, submit applications, and apply for visa. We provide step-by-step guidance.',
            'how to apply' => '1. Research universities and programs 2. Check admission requirements 3. Prepare documents (transcripts, LORs, SOP) 4. Take language tests 5. Submit applications 6. Apply for visa',
            'documents' => 'Required documents typically include: academic transcripts, language test scores, letters of recommendation, statement of purpose, CV, and financial statements.',

            // Costs
            'cost' => 'Costs vary by country and lifestyle. Include tuition, living expenses, insurance, and books. We provide detailed cost breakdowns. Which country are you considering?',
            'tuition' => 'Tuition fees: USA ($25k-55k), UK ($15k-30k), Canada ($12k-25k), Australia ($20k-35k), Germany ($0-500), Netherlands ($8k-15k) per year.',
            'living cost' => 'Monthly living costs: USA ($1,200-2,500), UK ($1,000-1,800), Canada ($800-1,500), Australia ($1,200-2,000), Germany ($800-1,200), Netherlands ($900-1,400).',

            // Programs and courses
            'courses' => 'We offer programs in business, engineering, medicine, arts, sciences, and more. Many programs available in English. What field interests you?',
            'programs' => 'Available programs: Undergraduate, Graduate, MBA, PhD, Professional degrees, Online/Hybrid options. We match programs to your career goals.',
            'stem' => 'STEM programs (Science, Technology, Engineering, Math) are popular with good job prospects. Available at MIT, Stanford, Cambridge, Toronto, and many others.',

            // Work opportunities
            'work' => 'Most countries allow part-time work during studies (10-20 hours/week) and full-time work after graduation. Post-study work visas available in most destinations.',
            'job' => 'Post-study work options: USA (OPT: 12-36 months), UK (PSW: 2 years), Canada (PGWP: 8-36 months), Australia (485: 18 months-4 years).',

            // Language and tests
            'ielts' => 'IELTS required for UK, Canada, Australia, Netherlands. Minimum scores: 6.0-7.0. We recommend preparing 2-3 months. Practice tests and coaching available.',
            'toefl' => 'TOEFL required for USA universities. Minimum scores: 80-100. Computer-based test with reading, listening, speaking, and writing sections.',
            'gre' => 'GRE required for many graduate programs in USA. Tests verbal reasoning, quantitative reasoning, and analytical writing. Optional for some programs.',
            'gmat' => 'GMAT required for MBA programs. Tests analytical writing, integrated reasoning, quantitative, and verbal skills.',

            // Accommodation
            'accommodation' => 'Options include university dorms, private apartments, homestays, and shared housing. We help arrange pre-departure accommodation with airport pickup.',
            'housing' => 'Housing costs: $300-800/month for dorms, $500-1,500/month for apartments. We provide verified housing options and lease assistance.',

            // Health and insurance
            'health insurance' => 'Required for visa applications. Covers medical emergencies, doctor visits, and hospitalization. Costs $300-800/year depending on coverage.',
            'medical' => 'Health insurance mandatory for international students. Includes emergency care, routine checkups, and dental coverage in most plans.',

            // Farewell
            'bye' => 'Goodbye! Thank you for chatting with StudyAbroad. Feel free to return anytime for more information.',
            'thank you' => 'You\'re welcome! I\'m glad I could help with your study abroad questions. Don\'t hesitate to ask more.',
            'thanks' => 'You\'re welcome! Happy to assist with your international education journey.',
        ];

        $lowerMessage = strtolower($message);

        // Check for exact matches first
        if (isset($responses[$lowerMessage])) {
            return $responses[$lowerMessage];
        }

        // Check for partial matches (using word boundaries to avoid substring matches within words)
        foreach ($responses as $key => $response) {
            if (preg_match('/\b' . preg_quote($key, '/') . '\b/', $lowerMessage)) {
                return $response;
            }
        }

        // Default responses based on message content
        if (strpos($lowerMessage, 'how much') !== false || strpos($lowerMessage, 'cost') !== false) {
            return 'Costs vary by country and program. I can provide detailed cost breakdowns for specific destinations. Which country interests you?';
        }

        if (strpos($lowerMessage, 'where') !== false) {
            return 'We have partnerships with universities in over 100 countries. Popular destinations include USA, UK, Canada, Australia, Germany, and Netherlands. What type of program are you looking for?';
        }

        if (strpos($lowerMessage, 'when') !== false) {
            return 'Application deadlines vary by university and program. Most universities have multiple intakes: Fall (September), Spring (January), and Summer (May). We can help you with specific deadlines.';
        }

        if (strpos($lowerMessage, 'why') !== false) {
            return 'Study abroad offers world-class education, cultural experiences, career opportunities, and personal growth. Each country has unique advantages. What aspects interest you most?';
        }

        // Default response
        return 'I\'m here to help with your study abroad questions! I can provide information about universities, scholarships, visas, costs, and applications. What specific topic would you like to know more about?';
    }
}
