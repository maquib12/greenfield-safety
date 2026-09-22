<?php

namespace App\Data;

class CourseData
{
    public static function all(): array
    {
        return [

            'health-safety' => [
                'title' => 'Health & Safety',
                'short_title' => 'Health & Safety',
                'overview' => 'This training provides participants with practical knowledge of workplace health and safety principles, hazard awareness and safe working practices.',
                'description' => 'The program is designed to help participants understand their responsibilities and contribute to a safer working environment.',
                'topics' => [
                    'Understanding workplace health and safety principles',
                    'Identifying common workplace hazards',
                    'Applying safe working practices',
                    'Understanding safety responsibilities',
                    'Basic incident prevention and response',
                ],
                'audience' => 'Employees, supervisors, managers and professionals who require workplace health and safety awareness.',
            ],

            'fire-safety' => [
                'title' => 'Fire Safety',
                'short_title' => 'Fire Safety',
                'overview' => 'This training focuses on fire prevention, workplace fire hazards, emergency procedures and appropriate response during fire-related incidents.',
                'description' => 'Participants learn essential fire safety awareness and practical measures that can help reduce workplace fire risks.',
                'topics' => [
                    'Understanding common fire hazards',
                    'Fire prevention and safety awareness',
                    'Emergency evacuation procedures',
                    'Basic fire response practices',
                    'Workplace fire safety responsibilities',
                ],
                'audience' => 'Employees, supervisors, facility personnel and professionals working in environments where fire safety awareness is required.',
            ],

            'first-aid' => [
                'title' => 'First Aid',
                'short_title' => 'First Aid',
                'overview' => 'This training provides essential first aid knowledge and practical awareness for responding to common workplace emergencies.',
                'description' => 'Participants develop an understanding of appropriate first aid actions while waiting for professional medical assistance.',
                'topics' => [
                    'Understanding basic first aid principles',
                    'Responding to common workplace injuries',
                    'Emergency response procedures',
                    'Basic casualty assessment',
                    'Understanding first aid responsibilities',
                ],
                'audience' => 'Employees, supervisors, workplace representatives and individuals who require basic workplace first aid awareness.',
            ],

            'construction-safety' => [
                'title' => 'Construction Safety',
                'short_title' => 'Construction Safety',
                'overview' => 'This training focuses on workplace hazards and safe working practices relevant to construction environments and operational activities.',
                'description' => 'Participants gain practical safety awareness to help identify hazards and follow appropriate safety practices on construction sites.',
                'topics' => [
                    'Construction site safety awareness',
                    'Identifying common construction hazards',
                    'Safe working practices',
                    'Personal protective equipment awareness',
                    'Incident prevention and reporting',
                ],
                'audience' => 'Construction workers, supervisors, site personnel, contractors and other professionals working in construction environments.',
            ],

            'workplace-safety' => [
                'title' => 'Workplace Safety',
                'short_title' => 'Workplace Safety',
                'overview' => 'This training promotes general workplace safety awareness, responsible behaviour and practical measures for maintaining a safer work environment.',
                'description' => 'The program helps employees understand common workplace risks and the importance of following established safety practices.',
                'topics' => [
                    'General workplace safety principles',
                    'Recognising workplace hazards',
                    'Safe working behaviour',
                    'Workplace safety responsibilities',
                    'Incident prevention and awareness',
                ],
                'audience' => 'Employees, supervisors, managers and professionals seeking general workplace safety awareness.',
            ],

            'risk-management' => [
                'title' => 'Risk Management',
                'short_title' => 'Risk Management',
                'overview' => 'This training introduces participants to workplace hazard identification, risk assessment and practical risk control measures.',
                'description' => 'Participants learn how to recognise potential risks and understand the basic process of assessing and controlling workplace hazards.',
                'topics' => [
                    'Understanding workplace hazards and risks',
                    'Hazard identification',
                    'Basic risk assessment principles',
                    'Risk control measures',
                    'Monitoring and improving workplace safety',
                ],
                'audience' => 'Employees, supervisors, managers, safety personnel and professionals involved in workplace risk management.',
            ],

        ];
    }

    public static function get(string $slug): ?array
    {
        return self::all()[$slug] ?? null;
    }
}